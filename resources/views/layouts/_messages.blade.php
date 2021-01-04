@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> {{ session('success') }}You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif