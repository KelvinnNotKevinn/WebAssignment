<?php
include('../database/connection.php');

// check if the products table is empty
$sql_check_empty = "SELECT COUNT(*) as count FROM products";
$result_check_empty = $conn->query($sql_check_empty);
$row = $result_check_empty->fetch_assoc();
$count = $row['count'];


if ($count == 0) {
    // Insert products into the products table
    $sql_insert_products = "INSERT INTO products (id, name, `desc`, spec, img, price) VALUES
    ('D001','G203 LIGHTSYNC', 'Make the most of play time with G203—a gaming mouse in a variety of vibrant colors.','LIGHTSYNC RGB lighting 6 programmable buttons Resolution: 200 – 8,000 dpi', 'g203.png', 73.00),
    ('D002','G305 LIGHTSPEED', 'LIGHTSPEED wireless gaming mouse designed for serious performance with latest technology innovations.','Wireless report rate: 1000Hz Wireless technology: LIGHTSPEED Wireless Microprocessor: 32-bit ARM', 'g305ls.png', 139.00),
    ('D003','G502 HERO', 'Engineered for advanced gaming performance. G502 HERO features HERO 25K gaming sensor.','Sensor: HERO Resolution: 100 – 25,600 dpi Zero smoothing/acceleration/filtering Max. acceleration: >40 G 1Tested on Logitech G240 Gaming Mouse PadMax. speed: >400 IPS 2 Tested on Logitech G240 Gaming Mouse Pad', 'g502hr.png', 169.00),
    ('D004','G413 SE', 'From tactile mechanical switches to 6-key rollover anti-ghosting and PBT keycap to compete.','Actuation distance: 1.9 mm Actuation force: 50 g Total travel distance: 4 mm Connection Type: USB 2.0 USB Protocol: USB 2.0 Backlighting: Yes, white per key lighting', 'g413.png', 271.00),
    ('D005','G213 PRODIGY', 'Durable with gaming-grade performance. Tactile Mech-Dome keyswitches are spill-resistant.','Connection Type: USB 2.0 USB Protocol: USB 2.0 USB Speed: Full Speed Indicator Lights: Yes Backlighting: RGB Cable Length : 1.8 m', 'g213.png', 179.00),
    ('D006','PRO X TKL', 'A championship-trusted wireless gaming keyboard designed for the highest levels of competitive play.','Pro-inspired tenkeyless design LIGHTSYNC RGB lighting. Onboard lighting profiles . 6 ft detachable charging and data cable1 ms report rate', 'prox.png', 799.00),
    ('D007','G335 Gaming Headset', 'A lightweight, cool wired headset made with a suspension headband design with an adjustable strap.','Driver: 40 mm Frequency Response: 20 Hz - 20 kHz Impedance: 36 Ohms Sensitivity: 87.5 dB SPL/mW', 'g335.png', 260.00),
    ('D008','G733 Wireless Headset', 'Wireless gaming headset designed for performance and comfort. Outfitted with all the surround sound.','Driver: PRO-G 40 mm Frequency Response: 20 Hz - 20 kHz Impedance: 39 Ohms , 5k Ohms  Sensitivity: 87.5 dB SPL/mW', 'g733.png', 600.00),
    ('D009','PRO X 2 LIGHTSPEED', 'Designed with pros for the highest levels of competition. Wireless and built with the highest quality material.','Driver: Graphene 50 mm Magnet: Neodymium Frequency Response: 20 Hz-20 KHz Impedance: 38 Ohms Sensitivity: 87.8 dB SPL @ 1 mW & 1 cm', 'prox2.png', 1214.00)";

    if ($conn->query($sql_insert_products) === TRUE) {
        echo "Products inserted successfully<br>";
    } else {
        echo "Error inserting products: " . $conn->error;
    }
}


//close the database connection
$conn->close();

?>