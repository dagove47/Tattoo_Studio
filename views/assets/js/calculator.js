$(document).ready(function () {
    // Function to update range input values and titles
    function updateRangeValue(inputId, value) {
        const titles = {
            size: ["Muy Pequeño/Minimalista", "Pequeño (<5 cm / 2'')", "Mediano (hasta 10 cm / 4'')", "Grande (hasta 20 cm / 8'')", "Media Manga", "Extremidad Completa", "Espalda Completa", "No estoy seguro aún"],
            detail: ["Básico", "Algunos Detalles", "Detallado", "Muy Complejo"],
            experience: ["Principiante", "Aprendiz", "Establecido", "Experimentado", "Reconocido", "Clase Mundial", "No estoy seguro aún"]
        };
        $("#" + inputId + "Value").text(titles[inputId][value]);
    }

    updateRangeValue("size", $("#size").val());
    updateRangeValue("detail", $("#detail").val());
    updateRangeValue("experience", $("#experience").val());

    $("#size").on("input", function () {
        updateRangeValue("size", $(this).val());
    });
    $("#detail").on("input", function () {
        updateRangeValue("detail", $(this).val());
    });
    $("#experience").on("input", function () {
        updateRangeValue("experience", $(this).val());
    });

    const prices = {
        "San Jose": {
            "Black & Grey": [50, 100, 150, 200, 300, 500, 700, 1000],
            "Color": [100, 150, 200, 250, 400, 600, 900, 1200]
        },
        "Heredia": {
            "Black & Grey": [40, 80, 120, 160, 250, 400, 600, 900],
            "Color": [80, 120, 160, 200, 320, 500, 800, 1100]
        },
        "Cartago": {
            "Black & Grey": [45, 90, 135, 180, 275, 450, 650, 950],
            "Color": [90, 135, 180, 225, 360, 550, 850, 1150]
        }
    };

    $("#tattooForm").submit(function (event) {
        event.preventDefault();
        const city = $("#city").val();
        const color = $('input[name="color"]:checked').val();
        const size = $("#size").val();
        const detail = $("#detail").val();
        const experience = $("#experience").val();

        const priceRange = prices[city][color];
        const basePrice = priceRange[size];
        const detailMultiplier = [1, 1.5, 2, 3][detail];
        const experienceMultiplier = [0.5, 1, 1.5, 2, 3, 5, 8][experience];

        const minCost = basePrice * detailMultiplier * experienceMultiplier;
        const maxCost = minCost * 1.5; // Assuming maximum cost is 1.5 times the minimum

        Swal.fire({
            title: "Costo estimado",
            html: `El costo de su tatuaje oscilará entre $${minCost.toFixed(2)} y $${maxCost.toFixed(2)}`,
            icon: "info"
        });
    });

});

