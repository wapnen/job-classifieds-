<div id="rate_artisan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Performance review</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container">
          
        
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal " method="POST" action="/post/review" id="post_review">
              {{ csrf_field() }}
              <input type="hidden" name="ad_id" id="ad_id" value="">
               <div class="form-group row">
                            
                  <div class="col-md-12">
                      <label for="email" >Rate artisan on scale of 1-5</label>

                      <input id="rating" type="number" class="form-control" min="1" max="5" name="rating" value="3" required autofocus>

                      
                  </div>
                  <div class="col-md-12">
                      <label for="email" >Comments on artisan's performance</label>
                      <textarea class="form-control" required="" name="review" rows="100"></textarea>
                      
                      
                  </div>
              </div>

            </div>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success ">
            Submit review
          </button>
        </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
