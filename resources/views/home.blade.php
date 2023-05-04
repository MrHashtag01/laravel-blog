<!DOCTYPE html>
<html>
<head>
    <title>Laravel Tut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
      <h2 class="mb-3">Laravel jQuery Radio Button Div Hide Show Example</h2>
      <div class="mb-4">
        <div><input type="radio" name="type" value="userProfile" /> User Profile</div>
        <div><input type="radio" name="type" value="products" /> Products</div>
     </div>
      
      <div class="userProfile radioBtnChoose mb-3">
        <label>User Profile:</label>
        <br>
        <input type="text" placeholder="Search user" />
      </div>
      <div class="products radioBtnChoose">
        <label>Products:</label>
        <br>
        <input type="text" placeholder="Search product" />
      </div>
      <script>
        $(document).ready(function () { // ready function means the code will execute only after the page has finished loading
          $('input[type="radio"]').click(function () { // all radio input elements are targetted here using a jquery selector, then a click event listener is added to each of the radio input elements 
            var inputValue = $(this).attr("value"); // here the attr() function gets the value of the radio button that was clicked on and stores it in the variable 
            var target = $("." + inputValue); // this selector targets all the elements with the class name that matches the value of the clicked button i.e (.userProfile)
            $(".radioBtnChoose").not(target).hide(); // the hide() function hides all elements on the page that have "radioBtnChoose" but not the ones that were selected in the previous line
            $(target).show();// this shows the element with the class name that matches the radio button
          });
        });
      </script>
    
</div>
  
</body>
</html>