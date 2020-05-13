<?php   
    require 'car.php';

    $bmw = new car('Bmw',15000,2.5,"10/09/2019",'free', 'BE-504');
    $peugeot = new car('Peugeot',150000,2.3,"24/02/2018",'free', 'FR-248');
    $audi = new car('Audi',15000,2.5,"10/09/2019",'free', 'FR-504');
    $mercedes = new car('Mercedes',15000,3.5,"10/01/2020",'free','BE-114');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Cars List</h1>

    <table>

        <tr>
            <th>Image</th>
            <th>Brand</th>
            <th>Kilometers</th>
            <th>Weight</th>
            <th>Release Date</th>
            <th>Available</th>
            <th>Number plate</th>
            <th>Usage</th>
            <th>Country</th>
            <th>Type</th>
        </tr>
        <tbody>
            <tr>
                <td>
                    <img src="https://www.automobile-magazine.fr/asset/cms/840x394/161561/config/111917/apres-le-coupe-et-le-cabriolet-la-serie-8-se-decline-desormais-en-berline-alias-gran-coupe-chez-bmw.jpg" 
                        alt="bmw" width="150" heigth="150">
                
                </td>
                <?= $bmw->display()?>
            </tr>
            <tr>
                <td>
                
                    <img src="https://media.autoweek.nl/m/azoycwhbn4y6.jpg" 
                        alt="peugeot" width="150" heigth="150">
                
                </td>
                <?= $peugeot->display()?>
            </tr>
            <tr>
                <td>
                
                    <img src="https://cdn.motor1.com/images/mgl/q3Qpv/s1/2019-audi-r8.jpg" 
                        alt="bmw" width="150" heigth="150">
                
                </td>
                <?= $audi->display()?>
            </tr>
            <tr>
                <td>
                
                    <img src="https://www.automobile-magazine.fr/asset/cms/840x394/163985/config/112857/mercedes-amg-a-45-s-4matic-2019.jpg" 
                        alt="mercedes" width="150" heigth="150">
                
                </td>
                <?= $mercedes->display()?>
            </tr>
        
        </tbody>
        
    
    
    
    </table>
</body>
</html>