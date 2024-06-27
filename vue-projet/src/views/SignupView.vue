<template>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div>
        <div>
            <h3>SignUp</h3>
            <hr />
        </div>
        <form>
            <div class="form-group">
                <label>Pseudo</label>
                <input type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" />
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary">SignUp</button>
            </div>
        </form>
    </div>
        </div>
    </div>

    
  </template>
  
  <script>
  export default {
    name: 'SignupView',
  }
  </script>

  <style scopted>
  .row{
    /* margin-top: 30%;
    margin-left: 10%; */
    display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  
  
  }
</style>