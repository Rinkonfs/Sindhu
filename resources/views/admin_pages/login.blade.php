<!DOCTYPE html>
<html lang="en">
<head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
  outline: none;
}

body {
  background-color: #695acda6;
}

.form-holder {
  transition: 0.5s ease;

  position: absolute;
  width: 350px;
  height: 250px;

  left: calc(50% - 175px);
  bottom: calc(50% - 125px);

  background-color: #ffffff;
  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}

.form-holder form {
  display: flex;
  flex-direction: column;
  padding: 30px 5px;
  align-items: center;
}

.form-holder form input {
  background-color: #eeeeeeb9;
  border-radius: 2px;
  text-indent: 15px;
}

.form-holder form button {
  background-color: #695acd;
  color: #fff;
  font-size: 15px;
}

.form-holder form a {
  appearance: none;
  -webkit-appearance: none;
}

.form-holder form input,
.form-holder form button {
  border: none;
  height: 40px;
  width: 80%;
  margin: 10px;
}

.form-holder form button:hover {
  cursor: pointer;
  transition: 0.3s;
  opacity: 0.8;
}

.form-holder form button:disabled {
  opacity: 0.1;
  cursor: default;
}

.form-holder form p {
  color: #695acda6;
  text-decoration: underline;
}
.form-holder form p:hover {
  color: #5e4cd3;
  cursor: pointer;
}

.warning {
  position: absolute;
  text-align: center;

  width: 400px;
  height: 50px;
  top: -55px;
  left: calc(50% - 200px);

  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;

  background-color: #fff;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

  padding: 10px;
  transition: ease 0.5s;
}

.try {
  position: absolute;
  display: flex;

  bottom: 0;
  left: -100px;

  background-color: white;
  border-right: 15px solid lightgreen;
  width: 115px;
}

.try:active {
  transition: ease 0.5s;
  left: 0px;
}

.box {
  width: 50px;
  height: 50px;
  position: absolute;
  animation-name: up;
  animation-duration: 2s;
}

@keyframes up {
  0% {
    bottom: 0%;
    opacity: 0.1;
  }
  100% {
    bottom: 100%;
    transform: rotate(450deg);
    opacity: 1;
  }
}


</style>
</head>
<body>

{{-- <section class="form-holder">
    <form class="login-form">
      <input type="text" placeholder="username" required />
      <input type="password" placeholder="password" required />
      <button>LOGIN</button>
      <p>Not registered?</p>
    </form>
  </section>
  <div class="warning"></div>

  <div class="try">
    <div>
      <p>myuser</p>
      <p>mypassword</p>
    </div>
  </div>
  <br> --}}
</body>
</html>

