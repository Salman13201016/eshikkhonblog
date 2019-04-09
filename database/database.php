<?php
    include_once "connect.php";
    $table1 = "user";
    $table2= "categories";
    $table3 = "topics";
    $table4 = "blog";
    $table5 = "blog_topic";
    
    $sql = "CREATE TABLE $table1(
        id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        u_name VARCHAR(255) NOT NULL,
        u_mobile VARCHAR(255) NOT NULL,
        u_email VARCHAR(255) NOT NULL,
        u_university VARCHAR(255) NOT NULL,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table1 created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "CREATE TABLE $table2(
        id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        cat_name VARCHAR(255) NOT NULL,
        cat_details VARCHAR(255) NOT NULL,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table2  created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    
    $sql = "CREATE TABLE $table3(
        id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        t_name VARCHAR(255) NOT NULL,
        t_details VARCHAR(255) NOT NULL,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table3  created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }


    
    $sql = "CREATE TABLE $table4(
        id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255),
        details VARCHAR(255) NOT NULL,
        comment VARCHAR(255) NOT NULL,
        b_type VARCHAR(255) NOT NULL,
        cat_id int(10) UNSIGNED,
        u_id int(10) UNSIGNED,
        FOREIGN KEY (cat_id) REFERENCES $table2(id),
        FOREIGN KEY (u_id) REFERENCES $table1(id),
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table4  created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "CREATE TABLE $table5(
        id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        b_id int(10) UNSIGNED,
        FOREIGN KEY (b_id) REFERENCES $table4(id),
        created_at TIMESTAMP,
        update_at TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table5  created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
?>