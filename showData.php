<?php

global $wpdb;
$sql = "SELECT * FROM `wp_contact_form`";
$result = $wpdb->get_results($sql);
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center text-secondary py-2">Messages from contact form</h1>
<h4 class="text-center  my-5">Short code is <span class="text-secondary">[Contact_Form]</span></h4>

<div class="container-fluid px-4 mx-fluid table-responsive">

    <table id="CONTACT_FORM_MESSAGES" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Recieved at</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $key => $value) {
            ?>
                <tr>
                    <td> <?php echo $value->id; ?></td>
                    <td> <?php echo $value->FirstName; ?></td>
                    <td> <?php echo $value->LastName; ?></td>
                    <td> <?php echo $value->Email; ?></td>
                    <td> <?php echo $value->Subject; ?></td>
                    <td> <?php echo $value->Message; ?></td>
                    <td> <?php echo $value->sentDate; ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
