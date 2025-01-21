<?php 

function GetData($connect,$query){
	$arr = array();
		$sql = $query;
		$result = mysqli_query($connect,$sql);	
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($arr,$row);
		}
	$count = sizeof($arr);
	return $arr;
}

function GetPackageCover($connect)
{
	$sql ="select  package_id, name, picture from packages";
	//echo $sql;
	return GetData($connect,$sql);
}

function GetReviewsCover($connect)
{
	$sql ="select * from review";
	//echo $sql;
	return GetData($connect,$sql);
}

function SubmitReview($connect) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Make sure that the form data is present
        if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['country']) && !empty($_POST['image_path']) && !empty($_POST['review']) && !empty($_POST['rating'])) {
            
            $email = $_POST['email'];
            $name = $_POST['name'];
            $country = $_POST['country'];
            $image_path = $_POST['image_path'];
            $review = $_POST['review'];
            $rating = $_POST['rating'];
    
            // Prepare and bind SQL query
            $stmt = $connect->prepare("INSERT INTO clients (email, name, country, picture, review, star) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $email, $name, $country, $image_path, $review, $rating);
    
            // Execute the query and check for success
            if ($stmt->execute()) {
                echo "Review submitted successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
    
            $stmt->close();
            $connect->close();
        } else {
            echo "All fields are required!";
        }
    }
}

// Call the SubmitReview function when the form is submitted
// SubmitReview($conn);










function GetBookTypes($connect)
{
	$sql ="select * from booktype";
	return GetData($connect,$sql);
}

function FilterBooksByTypes($connect,$tids)
{
	
	$sql ="select * from books where  Book_type_id in (";
	foreach ($tids as $key => $tid) {
		if ($key == sizeof($tids)-1) {
			$sql.= "'$tid')";
		}else{
			$sql.= "'$tid',";
		}
	}
	return GetData($connect,$sql);
}


?>