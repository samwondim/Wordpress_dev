<!-- <form action="" class="myform"> -->
<input type="text" placeholder="fullname" class="fullname"><br>
<input type="email" placeholder="email" class="email"><br>
<input type="text" placeholder="phone number" class="phone_number"><br>

<select name="sex" class="sex">
    <option>
        Male
    </option>
    <option>
        Female
    </option>
</select><br>
<button class="btn">submit</button>
<!-- </form> -->

<script>
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

    const btn = document.querySelector('.btn');
    const fullname = document.querySelector('.fullname');
    const email = document.querySelector('.email');
    const phone_number = document.querySelector('.phone_number');
    const sex = document.querySelector('.sex');

    // const submitted = function() {
    //     const myform = document.querySelector('.myform');
    //     let form_data = new FormData(myform);

    //     console.log(form_data.values);
    // }

    btn.addEventListener('click', function() {
        console.log(fullname.value);
        console.log(email.value);
        console.log(phone_number.value);
        console.log(sex.value);


        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'irent_saveform',
                full_name: fullname.value,
                email: email.value,
                phone_number: phone_number.value,
                sex: sex.value
            },
            success: function(response) {
                const res = JSON.parse(response);
                console.log(res);

                if (res.status == "success") {
                    alert(res.status);
                }
            }
        });
    });
</script>