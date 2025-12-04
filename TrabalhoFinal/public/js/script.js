document.addEventListener("DOMContentLoaded", async () => {

    const perguntasContainer = document.querySelector(".perguntas");
    const botoesContainer = document.querySelector(".botoes");
    let perguntas = [];
    let perguntaIndex = 0;
    const response = await fetch("../src/get_perguntas.php");
    perguntas = await response.json();
    
    renderPergunta();
  
    function renderPergunta() {
        if (perguntaIndex >= perguntas.length) {
            mostrarFeedback();
            return;
        }

        const pergunta = perguntas[perguntaIndex];
        perguntasContainer.innerHTML = `<h2>${pergunta.texto_pergunta}</h2>`;
        botoesContainer.innerHTML = "";
        botoesContainer.style.display = "flex";

        for (let i = 0; i <= 10; i++) {
            const botao = document.createElement("button");
            botao.textContent = i;
            botao.classList.add("avaliacao-botoes");
            botao.style.backgroundColor = getCor(i);
            botao.addEventListener("click", () => enviarAvaliacao(pergunta.id_pergunta, i));
            botoesContainer.appendChild(botao);
        }
    }

    function getCor(i) {
        const cores = [
            "#d92027", "#e54a4f", "#f07167", "#f3a261", "#f9c74f",
            "#f9dc5c", "#b5d92e", "#90be6d", "#52b69a", "#43aa8b", "#3a7d44"
        ];
        return cores[i];
    }

    async function enviarAvaliacao(id_pergunta, nota) {
        const res = await fetch("../src/respostas.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ 
                id_pergunta, 
                nota
            })
        });
        const data = await res.json();
        perguntaIndex++;

        renderPergunta();
    }

    function mostrarFeedback() {
        perguntasContainer.innerHTML = `
          <h2>Deseja deixar um feedback adicional?</h2>
          <textarea id="feedback" placeholder="Escreva seu comentário aqui (opcional)..."></textarea>
          <div class="botoes-final">
            <button class="btn-feedback enviar">Enviar</button>
            <button class="btn-feedback nao">Não</button>
          </div>
        `;
        
        botoesContainer.innerHTML = ""; 
        botoesContainer.style.display = "none";

        document.querySelector(".enviar").addEventListener("click", enviarFeedback);
        document.querySelector(".nao").addEventListener("click", mostrarAgradecimento);
    }

    async function enviarFeedback() {
        const texto = document.querySelector("#feedback").value.trim();
        
        if (texto !== "") {
            const res = await fetch("../src/respostas.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ feedback: texto })
            });    
            const data = await res.json();
        }
        mostrarAgradecimento();
    }

    function mostrarAgradecimento() {
       window.location.href = "obrigado.php";
    }
});