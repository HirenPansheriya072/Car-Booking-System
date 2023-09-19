<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Information</title>
    <style> 
            form{
                display: block;
                padding: 100px;
                text-align: center;
                margin-top: 120px;
                width: 22rem;
                height: 580px;
                border-radius: 0.5rem;
                margin-left: 600px;
                box-shadow: 0.5rem 1rem rgb(0 0 0 / 10%);
                border: 0.1rem solid rgba(0,0,0,.1);
                background: #fff;
            }
            .btn
            {
                width: 132px;
                height: 45px;
                display: block;
                margin-left: 100px;
                background-color: #82add7c4;
                margin-top: 5px;
                border-radius: 5px;
                font-size: 25px;
            }
            .btn:hover 
              {
                background-color: #67abede6;
              }
            button.close
            {
                position: absolute;
                top: 8px;
                right: 10px;
                height: 73px;
                color: black;
                font-size: 3rem;
                border: none;
                margin-right: 20px;
                background-color: white;
                font-weight: 900;
                font-size: 45px;
                font-family: cursive;
            }
            input  
            {
                width: 381px;
                height: 30px;
                border-radius: 0.5rem;
                margin-left: -21px;
                font-size: 20px;
                font-family: monospace;
            }
            .form
            {
                margin-top: -90px;
            }
            h2
            {
              
              font-size: 35px;
              margin-top: -101px;
              background-color: #84b9ed;
              padding: 12px 0px;
              color: black;
              margin-left: -102px;
              width: 555px;
              border-radius: 5px;
            }
            label
              {
                display: flex;
                font-size: 20px;
                margin-bottom: -17px;
                color: #666;
              }
            .imgg
              {
                border: 2px solid black;
              }
    </style>
</head>
<body>

    <div class="form">
        <form action="add_car_database.php" method="POST" enctype="multipart/form-data">
        <button type="btn" formaction="see_car.php" name="close" class="close">X</button>

            <h2>Add Car</h2>

            

            <label for="car_name">Car Name</label><br>
                <input type="text" name="c_name" ><br><br>

            <label for="car_pricw">Car Price</label><br>
                <input type="text" name="c_price" ><br><br>

            <label for="car_fea">Seater</label><br>
                <input type="text" name="c_features_1" ><br><br>

            <label for="car_fea">Manual & Automatic</label><br>
                <input type="text" name="c_features_2" ><br><br>

            <label for="car_fea">Petrol & Diesel</label><br>
                <input type="text" name="c_features_3" ><br><br>

            <label for="car_fea">Brake horsepower (bhp)</label><br>
                <input type="text" name="c_features_4" ><br><br>

            <label for="car_fea">Cubic Centimeter (cc)</label><br>
                <input type="text" name="c_features_5" ><br><br>

            <label for="car_img">Car Image</label><br>
                <input type="file" class="imgg" name="car_image" ><br><br>

        
            <button type="submit" name="add_car" id="add_car" class="btn">Add Car</button>

      </form>
    </div>
</body>
</html>