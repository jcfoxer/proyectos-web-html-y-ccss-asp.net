<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login </title>
</head>
<body>

<div id="background"></div>
<div id="loggin-input-wrapper">
  <h1>Please log in</h1>
  <hr />
  <label for="username">Login login:</label>
  <input type="text" id="username" />
  <label for="password">Login password:</label>
  <input type="password" id="password" />
  <input type="checkbox" id="cookie" checked="checked"/>
  <label class="label-checkbox" for="cookie">Remember my login</label>
  <button type="submit">Loggins</button>
</div>





<style type="text/css">
	
body {
  background: black;
  position: relative;
  color: white;
  height: 100%;
  font-family: helvetica;
  text-transform: uppercase;
  padding: 5em 0;
  box-sizing: border-box;
}
html {
  height: 100%;
}

#background {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-color: black;
  background-position: center center;
  background-attachment: fixed;
  filter: blur(1em) brightness(.5);
  -webkit-filter: blur(1em) brightness(.5);
}
#loggin-input-wrapper {
  box-sizing: border-box;
  position: relative;
  padding: 2em;
  width: 24em;
  border: .1em solid white;
  margin: 0 auto;
}
h1 {
  width: 100%;
  text-align: center;
}
label {
  box-sizing: border-box;
  display: block;
  margin: 1em 0;
  width: 100%;
}
input[type=text],input[type=password] {
  box-sizing: border-box;
  display: block;
  margin: 1em 0;
  width: 100%;
  padding: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  background: none;
  border: .05em solid white;
  color: white;
  font-size: 2em;
}
input[type=checkbox] {
  box-sizing: border-box;
  display: inline-block;
  color: white;
  font-size: 2em;
}
.label-checkbox {
  box-sizing: border-box;
  display: inline-block;
  margin: auto;
  width: auto;

}
button {
  display: block;
  font-size: 2em;
  box-sizing: border-box;
  padding: 1em;
  -moz-appearance: none;
  -webkit-appearance: none;
  background: none;
  border: .05em solid white;
  margin: 1em auto 0 auto;
  color: white;
  text-transform: uppercase;
}
button:hover {
  background-image: url("https://2.bp.blogspot.com/-_gt7Hj67mRc/UT_otb7_EqI/AAAAAAAAHyQ/HmKc55NGsA0/s1600/269312_10152695881080647_800751310_n.jpg");
  background-position: center center;
  background-sizing: cover;
  background-repeat: no-repeat;
  color: rgba(1,1,1,0);
}



</style>




</body>
</html>