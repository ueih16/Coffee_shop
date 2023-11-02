@component('mail::message')
    <div class="container">
        <h3 class="title">The account has been successfully created, please activate to use</h3>
        <a class="link" href="{{ route('employee.confirm.password', ['data' => $data]) }}">Activation confirmation</a>
    </div>
@endcomponent

<style>
    .container {
        text-align: center;
    }
    .title {
        text-align: center;
        font-size: 20px;
        margin-bottom: 30px;
    }

    .link {
        padding: 8px 20px;
        color: white;
        background-color: #33BBC5;
        font-weight: 500;
        font-size: 18px;
        margin: 30px auto;
        text-decoration: none;
        border-radius: 3px;

    }
</style>
