<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contactenos</title>
</head>
<body>
 <h1>Formulário de Contato</h1>
    <form
      action="https://formsubmit.co/your@email.com"
      method="POST"
      class="form"
    >
      <label for="name">Nome</label>
      <input type="text" name="name" id="name" required />
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" required />
      <label for="message">Mensagem</label>
      <textarea name="message" id="message" required></textarea>
      <input type="hidden" name="_captcha" value="false" />
      <input
        type="hidden"
        name="_next"
        value="https://yourdomain.co/thanks.html"
      />
      <button type="submit">Enviar</button>
    </form>

    <style>
    	
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #0d0e0f;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  padding-right: 1rem;
  padding-left: 1rem;
}

h1,
h2 {
  font-size: 3rem;
  color: #fff;
  margin-bottom: 2rem;
  text-align: center;
  line-height: 1.2;
}

h1::before {
  content: "📧";
  display: block;
}

h2::before {
  content: "🐅";
  display: block;
}

.form {
  width: 100%;
  max-width: 32rem;
  font-size: 1.125rem;
}

.form label,
.form input,
.form textarea,
.form button {
  display: block;
  width: 100%;
}

.form label {
  color: #fff;
  line-height: 1;
  margin-bottom: 0.5rem;
}

.form input,
.form textarea {
  font: inherit;
  padding: 0.8rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 8px;
  transition: border-color, box-shadow 0.2s;
}

.form textarea {
  min-height: 13rem;
  resize: vertical;
}

.form input:hover,
.form input:focus,
.form textarea:hover,
.form textarea:focus {
  outline: none;
  border-color: #09d;
  box-shadow: 0 0 0 3px #4dc8ff;
}

.form button {
  display: block;
  padding: 1rem;
  background: #0072c4;
  color: #fff;
  font: inherit;
  text-transform: uppercase;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.2s;
}

.form button:hover,
.form button:focus {
  outline: none;
  background: #09d;
}



    </style>


</body>
</html>