<?php
// print_r($profile_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .profile-card {
            max-width: 500px;
            margin: 60px auto;
            border-radius: 20px;
            box-shadow: 0 4px 25px rgba(0,0,0,0.1);
            background-color: #ffffff;
            overflow: hidden;
        }

        .profile-header {
            background: linear-gradient(135deg, #00ffd0, #0056b3);
            color: #fff;
            padding: 30px 20px;
            text-align: center;
        }

        .profile-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid yellow;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .profile-body {
            padding: 25px;
        }

        .list-group-item {
            border: none;
            padding-left: 0;
            padding-right: 0;
        }

        .list-group-item strong {
            color: #212529;
            margin-right: 5px;
        }

        .btn-group-custom {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
        }

        .btn-group-custom .btn {
            flex: 1 1 calc(50% - 6px);
        }

        @media (min-width: 576px) {
            .btn-group-custom .btn {
                flex: 1 1 calc(33.33% - 8px);
            }
        }

        @media (min-width: 768px) {
            .btn-group-custom {
                flex-direction: row;
            }
            .btn-group-custom .btn {
                flex: 1;
            }
        }
    </style>
</head>
<body>

<main class="container">
    <div class="card profile-card">
        <div class="profile-header">
        	<?php
        	if (!empty($profile_data['customer_picture'])) {
        	?>
        	<img src="<?=base_url().$profile_data['customer_picture']?>" alt="Profile Picture">
        	<?php
        		}else{
        	?>
        		<i class="fa fa-user fa-3x" aria-hidden="true"></i>
        	<?php
        			}
        	?>

            <h3 class="mb-0" style="text-transform: capitalize;"><?=htmlspecialchars($profile_data['customer_name']) ?></h3>
            <p class="mb-0 small">Customer ID: #<?=$profile_data['customer_id'] ?></p>
        </div>
        <div class="profile-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                	<strong>
                		<i class="fas fa-phone-alt"></i> Mobile:
                	</strong> 
                	<?= htmlspecialchars($profile_data['customer_mobile']) ?>
                </li>
                <li class="list-group-item">
                	<strong>
                		<i class="fas fa-envelope"></i> Email:
                	</strong> 
                	<?= htmlspecialchars($profile_data['customer_email']) ?>
                </li>
                <li class="list-group-item">
                	<strong>
                		<i class="fas fa-lock"></i> Password:
                	</strong> 
                	<span class="text-muted">********</span> 
                	<small class="text-muted">(Hidden)</small>
                </li>
            </ul>

            <div class="btn-group-custom">
                <a href="<?=base_url()?>user/my_cart" class="btn btn-outline-success">
                	<i class="fas fa-shopping-cart"></i> My Cart
                </a>
                <a href="<?=base_url()?>user/change_password" class="btn btn-outline-primary">
                	<i class="fas fa-key"></i> Change Password
                </a>
                <a href="<?=base_url()?>user/edit_profile" class="btn btn-outline-info text-dark">
                	<i class="fas fa-user-edit"></i> Edit Profile
                </a>
                <a href="<?=base_url()?>user/logout" class="btn btn-outline-danger">
                	<i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>
