document.addEventListener("DOMContentLoaded", function(){

    const quantidades = document.querySelectorAll(".quantidade");
    const valorUnitarios = document.querySelectorAll(".valor-unitario");
    const totalElement = document.getElementById("total");

    function atualizarTotal(){
        let total = 0;

        for(let i = 0; i < quantidades.length; i++){
            const quantidade = parseInt(quantidades[i].value);
            const valorUnitario = parseFloat(valorUnitarios[i].textContent);
            total += quantidade * valorUnitario;
        }
        //exibe o total com 2 casas decimais
        totalElement.textContent = total.toFixed(2);
    }
    //add um listener para cada campo de quantidade
    quantidades.forEach(function(quantidadeInput) {
        quantidadeInput.addEventListener("change", atualizarTotal);
    });
    //atualizar o total inicial
    atualizarTotal();
});