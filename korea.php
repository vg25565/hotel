<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css
">
    <title>korea</title>
</head>
<body>
    
<section class="book" id="book" >
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="img">
            <img decoding="async" src="img/book-img.svg" alt="">
        </div>

        <form action="process_booking.php" method="post">
        

              <div class="inputBox">
                  <h3>where to</h3>
                  <input type="text" id="Sydney" name="whereTo" value="The-K Hotel Seoul" readonly>
              </div>
              <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests"  name="numberOfGuests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date" name="arrivalDate">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date"  name="leavingDate">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>
    </div>
</section>
</body>
</html>