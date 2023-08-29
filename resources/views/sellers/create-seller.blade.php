<style>
    .container{
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .texts{
        margin-bottom: 10px;
        width: 100%;
        display: flex;
    }
    .texts input{
        margin-left: auto;
    }
    .texts label{
        margin-right: 10px;
    }
</style>
<div class="container">
    <form method="POST" action="/seller/store">
        @csrf
        <div class="texts">
            <label for="lname">Last Name</label>
            <input type="text" name="lname">
        </div>
        <div class="texts">
            <label for="fname">First Name</label>
            <input type="text" name="fname">
        </div>
        <div class="texts">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <input type="submit" value="Create">
    </form>
</div>