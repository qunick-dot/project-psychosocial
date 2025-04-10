<!DOCTYPE html>
<html>
<head>
    <title>Consultation Status Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            font-size: 16px;
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #007bff;
            color: white;
            border-radius: 0 0 8px 8px;
        }
        .social-links a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <p>Dear <?php echo e($consultation->name); ?>,</p>
            <?php if($status == 'declined'): ?>
                <p>We regret to inform you that your consultation request has been <strong>declined</strong>.</p>
            <?php else: ?>
                <p>Your consultation appointment request has been <strong><?php echo e(ucfirst($status)); ?></strong>.</p>
                <p>Details:</p>
                <ul>
                    <li><strong>Date:</strong> <?php echo e($consultation->preferred_date->format('F d, Y')); ?></li>
                    <li><strong>Consultant:</strong> <?php echo e($consultation->consultant); ?></li>
                    <li><strong>Status:</strong> <?php echo e(ucfirst($status)); ?></li>
                </ul>
            <?php endif; ?>
            <p>Thank you for choosing our services!</p>
        </div>
        <div class="footer">
            <div class="header">
                <img src="<?php echo e(asset('user-assets/images/logo/psychosocial_counselling_logo.jpg')); ?>" alt="Company Logo">
            </div>
            <p>Best regards,<br>Psychosocial Counselling Service Pvt. Ltd</p>
            <div class="social-links">
                <a href="#">Facebook</a> |
                <a href="#">Twitter</a> |
                <a href="#">LinkedIn</a>
            </div>

        </div>
    </div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\emails\consultation_status.blade.php ENDPATH**/ ?>