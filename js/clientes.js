var formcliente = document.querySelector("#formcliente");
formcliente.onsubmit = function(event){
    event.preventDefault();
    console.log("Trata formulario cliente");

    var cliente = {};
    cliente.idLivro = document.querySelector("#idLivro").value;
    cliente.isbn = document.querySelector("#isbn").value;
    cliente.nome = document.querySelector("#nome").value;
    cliente.editora = document.querySelector("#editora").value;
    cliente.ano = document.querySelector("#ano").value;
    cliente.idAutor = document.querySelector("#idAutor").value;
    
    console.log(cliente);
    enviarLivro(cliente);
}

function enviarLivro(cliente){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 201) {
            //Tratar as ações após a comunicação com o servidor
            console.log("Chegou aqui");
            limparFormulario();
            carregarLivros();
        }
    };
    xhttp.open("POST", "http://localhost/PI2/Trabalho%20I/livro", true);
    xhttp.setRequestHeader("Content-Type","application/json")
    xhttp.send(JSON.stringify(cliente));
}

function limparFormulario(){
    document.querySelector("#idLivro").value="";
    document.querySelector("#isbn").value="";
    document.querySelector("#nome").value="";
    document.querySelector("#editora").value=""; 
    document.querySelector("#ano").value=""; 
    document.querySelector("#idAutor").value="";    
}

var body = document.querySelector("body");
body.onload = function () {
    carregarClientes();
}

function carregarClientes() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            montarTabela(JSON.parse(this.responseText));            
        }
    };
    xhttp.open("GET", "http://localhost/PI2/Trabalho%20I/cliente", true);
    xhttp.send();
}

function montarTabela(clientes){
    var str="";
    str+= "<table class='table table-striped table-bordered lista-clientes'>";
    str+= "<tr>";
    str+= "<th scope='col'>ID</th>";
    str+= "<th scope='col'>ISBN</th>";
    str+= "<th scope='col'>Nome</th>";
    str+= "<th scope='col'>Editora</th>";
    str+= "<th scope='col'>Ano</th>";
    str+= "<th scope='col'>Autor</th>";
    str+= "</tr>";

    //for(var i=0; i<livros.length; i++)
    for(var i in clientes){
        str+="<tbody>";
        str+="<tr>";
        str+="<th scope='row'>"+clientes[i].idLivro+"</th>";
        str+="<td>"+clientes[i].isbn+"</td>";
        str+="<td>"+clientes[i].nome+"</td>";
        str+="<td>"+clientes[i].editora+"</td>";
        str+="<td>"+clientes[i].ano+"</td>";
        str+="<td>"+clientes[i].idAutor+"</td>";
        str+="</tr>";
        str+="</tbody>";
    } 
    str+= "</table>";

    var tabelaclientes = document.querySelector("#tabelaclientes");
    tabelaclientes.innerHTML = str;
}