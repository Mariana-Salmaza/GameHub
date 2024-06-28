<div class="form">
    <h1 class="text-center">Formulário</h1>

    <form action="https://formsubmit.co/marianasalmaza.jobs@gmail.com" method="POST" onsubmit="return validateForm()">

        <div class="mb-3">
            <label class="form-label">Digite seu nome completo</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nome completo">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite seu E-mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Digite um e-mail válido">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite uma mensagem</label>
            <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success btn-lg">Enviar</button>

    </form>


    <script>
        function validateForm() {

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('mensagem').value;

            if (name === "" || email === "" || message === "") {
                alert('Por favor, preencha todos os campos.');
                return false;
            }

            if (!validateEmail(email)) {
                alert('Por favor, insira um endereço de email válido.');
                return false;
            }

            return true; 
        }

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>

</div>