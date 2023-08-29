<style>
    .btns, .btns button{
        display: flex;
        margin-right: 10px;
    }
</style>
<h1>List of Sellers</h1>
<button type="button" id="create">Create?</button>
<ul>
@foreach($sellers as $seller)
    <li>{{ $seller->lname }}</li>
    <li>{{ $seller->fname }}</li>
    <li>{{ $seller->password }}</li>
    <div class="btns">
        <form method="POST" action="/update">
            @csrf
            <input type="hidden" name="id" value="{{ $seller->id }}">
            <input type="hidden" name="lname" value="{{ $seller->lname }}">
            <input type="hidden" name="fname" value="{{ $seller->fname }}">
            <input type="hidden" name="password" value="{{ $seller->password }}">
            <button type="submit">Update</button>
        </form>
            
        <form method="POST" action="/seller/{{ $seller->id }}/delete">
            @csrf
            <button type="submit">Delete</button>
        </form>
      </div>
    <hr>
@endforeach
</ul>

<script>
    // script for button in redirecting the user to the update page
    function goToViewUpdater() {
      window.location.href = "/create";
    }
    var createButton = document.getElementById("create");
    createButton.addEventListener("click", goToViewUpdater);

</script>