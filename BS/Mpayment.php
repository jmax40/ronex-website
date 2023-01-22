<!DOCTYPE html>
<html>
<head>
<title>Payment Interface</title>
<style>
body {
  display: flex; /* Use flexbox to position the form and sidebar */
}
.form-container {
  width: 70%; /* Set the width of the form container */
  background-color: white; /* Set a white background color for the form container */
  border-radius: 10px; /* Add rounded corners to the form container */
  padding: 20px; /* Add padding to the form container */
  box-shadow: 2px 2px 5px #ccc; /* Add a subtle box shadow to the form container */
  margin: auto; /* Center the form container horizontally */
}
form {
  background-color: #f5f5f5; /* Add a light gray background color to the form */
  padding: 20px; /* Add padding to the form */
  border-radius: 10px; /* Add rounded corners to the form */
}
label {
  font-size: 18px; /* Increase the font size of the labels */
  font-weight: bold; /* Make the labels bold */
  display: block;
  margin-bottom: 10px;
}
input[type="text"], input[type="number"] {
  width: 100%;
  padding: 12px 20px;
  margin-bottom: 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}
input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-top: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #45a049;
}

/* Add the sidebar */
.sidebar {
  width: 30%; /* Set the width of the sidebar */
  background-color: #eee; /* Add a light gray background color to the sidebar */
  padding: 20px; /* Add padding to the sidebar */
  text-align: center; /* Center the contents of the sidebar */
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>

<div class="form-container">
  <form>
    <label for="or-number">OR Number:</label>
    <input type="text" id="or-number" name="or-number"><br>
    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount"><br>
    <label for="installments">Installments:</label>
    <input type="number" id="installments" name="installments"><br>
    <input type="submit" value="Submit Payment">
  </form>
</div>
</body>
