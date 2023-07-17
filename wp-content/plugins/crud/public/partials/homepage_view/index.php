<!-- <form action="" class="myform"> -->
<!-- </form> -->
<link rel="stylesheet" href="https://unpkg.com/mvp.css">
<div>
    <h1>Welcome To Irent</h1>
</div>
<div>
    <label for="fullname">Full name</label>
    <input type="text" class="fullname" name="fullname">
</div>

<div>
    <label for="phone_number">Phone number</label>
    <input type="text" class="phone_number" name="phone_number">
</div>

<div>
    <label for="email">E-mail</label>
    <input type="email" class="email" name="email">
</div>

<div>
    <label for="password">Password</label>
    <input type="password" class="password" name="password">
</div>

<div>
    <select name="sex" class="sex">
        <option>Male</option>
        <option>Female</option>
    </select>
</div>


<button class="btn">Signup</button>


<script>
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

    const btn = document.querySelector('.btn');

    const fullname = document.querySelector('.fullname');
    const password = document.querySelector('.password');
    const email = document.querySelector('.email');
    const phone_number = document.querySelector('.phone_number');
    const sex = document.querySelector('.sex');

    // const submitted = function() {
    //     const myform = document.querySelector('.myform');
    //     let form_data = new FormData(myform);

    //     console.log(form_data.values);
    // }

    btn.addEventListener('click', () => {
        console.log(fullname.value);
        console.log(password.value);
        console.log(phone_number.value);
        console.log(sex.value);

        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'irent_signup',
                full_name: fullname.value,
                password: password.value,
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