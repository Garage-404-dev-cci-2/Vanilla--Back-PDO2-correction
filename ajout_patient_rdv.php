<?php include './partials/header.php' ?>


<main>
    <?php include './utils/alert.php' ?>
    <section>
        <h1>Ajouter patient + rdv</h1>
        <form action="./process/process_ajout_patient_rdv.php" method="post">
            <input type="text" placeholder="Karfa" name="lastname" id="">
            <input type="text" placeholder="Hamza" name="firstname" id="">
            <input type="tel" placeholder="0612457821" name="phone" id="">
            <input type="email" placeholder="example@mail.com" name="mail" id="">
            <input type="text" placeholder="2022-12-04" class="datepicker" name="birthdate">
            <label for="dateHour">Date du rendez vous :</label>
            <input type="datetime-local" name="dateHour" id="">
            <button type="submit" class="btn" >Ajouter</button>
        </form>
    </section>
</main>

<script src="./assets/js/ajout_patient.js"></script>

<?php include './partials/footer.php' ?>