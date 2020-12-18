//Códigp do Talysson: Validar Formulário
const fields = document.querySelectorAll("[required]")
function customValidation(event) {
    const field = event.target

    if (field.validity)
        field.setCustomValidity("Esse campo é obrigatório")
}

for (field of fields) {
    field.addEventListener("invalid", customValidation)

}

//Código do edinho: Enviar Uma imagem
function loadFile(event) {
    var render = new FileReader()
    render.onload = function () {
        var output = document.getElementById("output")
        output.src = render.result
        document.getElementById("dashed").style.display = "none"
    }

    render.readAsDataURL(event.target.files[0])
}
