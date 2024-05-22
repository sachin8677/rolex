<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Payment Form</title>
</head>
<body>
   <style>
   {margin: 0;
    padding: 0;
   }

body {
    background-image: url('images/final.png');
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0;
}

.container {
    height: auto;
    width: 400px;
    background-image: url('images/final.png'); /* Replace 'your-image-url.jpg' with the path to your image */
    background-size: cover;
    background-position: center;
    padding: 20px;
    border-bottom-left-radius: 180px;
    border-top-right-radius: 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main-content {
    width: 100%;
    height: 235px;
    background-color: #1b9236;
    border-bottom-left-radius: 90px;
    border-bottom-right-radius: 80px;
    border-top: #1e6b30;
    display: flex;
    justify-content: center;
    align-items: center;
}

.text {
    text-align: center;
    font-size: 300%;
    text-decoration: aliceblue;
    color: aliceblue;
}

.course {
    color: black;
    font-size: 25px;
    font-weight: bolder;
}

.centre-content {
    width: 100%;
    height: 140px;
    margin: 20px 0;
    color: aliceblue;
    text-align: center;
    font-size: 20px;
    border-radius: 25px;
    padding: 10px;
    background-image: linear-gradient(#1e6b30, #308d46);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.centre-content-h2 {
    padding-top: 30px;
    padding-bottom: 30px;
    font-weight: normal;
}

.price {
    font-size: 60px;
    margin-left: 5px;
    bottom: 15px;
    position: relative;
}

.pay-now-btn {
    cursor: pointer;
    color: #fff;
    height: 50px;
    width: 290px;
    border: none;
    margin: 5px 0;
    background-color: rgb(71, 177, 61);
    position: relative;
}

.card-details {
    background: rgb(8, 49, 14);
    color: rgb(225, 223, 233);
    width: 100%;
    padding: 20px;
    border-radius: 10px;
}

.card-details p {
    font-size: 15px;
}

.card-details label {
    font-size: 16px;
    line-height: 35px;
}

.card-details .card-number,
.card-details .date-number,
.card-details .cvv-number,
.card-details .nameholder-number {
    margin-bottom: 10px;
}

.card-details input {
    width: calc(100% - 20px);
    padding: 5px;
    margin: 5px 0;
    border-radius: 5px;
    border: none;
}

.submit-now-btn {
    cursor: pointer;
    color: #fff;
    height: 40px;
    width: 100%;
    border: none;
    margin: 10px 0 0;
    background-color: rgb(71, 177, 61);
    border-radius: 5px;
}
</style>
    <div class="container">
        <div class="main-content">
            <p class="text">PAYMENT</p>
        </div>
 
 
        <div class="card-details">
            <p>Pay using Credit or Debit card</p>
            <div class="card-number">
                <label> Card Number </label>
                <input type="text" class="card-number-field"
                       placeholder="
                       ### ### ###" />
            </div>
            <div class="date-number">
                <label> Expiry Date </label>
                <input type="text" class="date-number-field"
                       placeholder="DD-MM-YY" />
            </div>
 
            <div class="cvv-number">
                <label> CVV number </label>
                <input type="text" class="cvv-number-field"
                       placeholder="xxx" />
            </div>
            <div class="nameholder-number">
                <label> Card Holder name </label>
                <input type="text" class="card-name-field"
                       placeholder="Enter your Name" />
            </div>
            <div>
                <a href="order1.php">
                    <button type="submit" class="submit-now-btn">
                        Submit
                    </button>
                </a>
            </div>   
        </div>
    </div>
</body>
 
</html>
