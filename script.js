document.addEventListener("DOMContentLoaded", () => {

    const ejercicios = document.querySelectorAll(".ejercicio");

    // =======================
    //   SONIDOS PRE-CARGADOS
    // =======================

    const sonidoCorrecto = new Audio("recursos/bien.mp3");
    const sonidoIncorrecto = new Audio("recursos/mal.mp3");

    sonidoCorrecto.volume = 1.0;
    sonidoIncorrecto.volume = 1.0;

    sonidoCorrecto.load();
    sonidoIncorrecto.load();

    // Evitar sonido bajo la primera vez
    sonidoIncorrecto.play().then(() => {
        sonidoIncorrecto.pause();
        sonidoIncorrecto.currentTime = 0;
    }).catch(() => {});


    // ===========================
    //    LÓGICA DE EJERCICIOS
    // ===========================

    ejercicios.forEach(ejercicio => {
        const opciones = ejercicio.querySelectorAll(".opcion");

        opciones.forEach(boton => {
            boton.dataset.textoOriginal = boton.textContent;

            boton.addEventListener("click", () => {

                const correcta = boton.dataset.correcta === "true";
                const contenedor = boton.closest(".ejercicio");

                // Quitar botón de reintentar anterior
                const viejo = contenedor.querySelector(".reintentar");
                if (viejo) viejo.remove();

                if (correcta) {
                    sonidoCorrecto.currentTime = 0;
                    sonidoCorrecto.play();

                    boton.style.backgroundColor = "green";
                    boton.textContent = "✅ Correcto";
                    contenedor.dataset.ok = "true";

                } else {
                    sonidoIncorrecto.currentTime = 0;
                    sonidoIncorrecto.play();

                    boton.style.backgroundColor = "red";
                    boton.textContent = "❌ Incorrecto";
                    contenedor.dataset.ok = "false";

                    // Botón reintentar
                    const rein = document.createElement("button");
                    rein.textContent = "🔁";
                    rein.classList.add("reintentar");
                    contenedor.appendChild(rein);

                    rein.addEventListener("click", () => {
                        opciones.forEach(op => {
                            op.disabled = false;
                            op.style.backgroundColor = "#00aaff";
                            op.textContent = op.dataset.textoOriginal;
                        });
                        delete contenedor.dataset.ok;
                        rein.remove();
                    });
                }

                // Desactivar opciones del ejercicio
                opciones.forEach(op => op.disabled = true);

                // Verificar si ya están todos correctos
                const todosCorrectos = Array.from(ejercicios)
                    .every(e => e.dataset.ok === "true");

                if (todosCorrectos) {
                    setTimeout(() => {
                        window.location.href = "felicidades.html";
                    }, 1000);
                }
            });
        });
    });
});
