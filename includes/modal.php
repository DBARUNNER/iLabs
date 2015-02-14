

<script>
      
      
      function aja (id,name,comment,com) {
        var i=id;
        var x=document.getElementById(name).value;
        var y=document.getElementById(comment).value;
        var ob=new XMLHttpRequest();
        ob.onreadystatechange=function(){
          if (ob.readyState==4 && ob.status==200) {
           document.getElementById(com).innerHTML=ob.responseText;
          };
        }
        ob.open("GET", "includes/view.php?id="+i+"&name=" + x+"&comment="+y, true);
        ob.send();
        var x=document.getElementById(name).value='';
        var y=document.getElementById(comment).value='';
      }

      function show (id,com) {
        var ob=new XMLHttpRequest();
        ob.onreadystatechange=function(){
          if (ob.readyState==4 && ob.status==200) {
           document.getElementById(com).innerHTML=ob.responseText;
          };
        }
        ob.open("GET", "includes/show.php?id="+id, true);
        ob.send();
      }
      function conta(name,email,mess,sub) {
        var x=document.getElementById(name).value;
        var y=document.getElementById(email).value;
        var z=document.getElementById(mess).value;
        var ob=new XMLHttpRequest();
        ob.onreadystatechange=function(){
          if (ob.readyState==4 && ob.status==200) {
            alert(ob.responseText);
          };
        }
        ob.open("GET", "includes/contact.php?name="+x+"&email="+y+"&message="+z+"&submit="+sub, true);
        ob.send();
        var x=document.getElementById(name).value='';
        var y=document.getElementById(email).value='';
        var z=document.getElementById(mess).value='';
      }
    </script>
<!-- Modal one-->
<div class="modal fade" id="one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title" id="myModalLabel">Project</h2>
      </div>
    <div class="modal-body" style="max-height:500px;">
    <div class="row">
    <div class="col-md-5 col-sm-12">
      <img src="img/dsc_0257.jpg" class="img img-thumbnail img-responsive" />
    </div>
      <div class="col-md-7 col-sm-12 thumbnail">
        <div class="row" style="overflow-y: auto; height:auto;max-height: 150px;">
          <p class="text-justify" style="margin:0 20px;">
             1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!
          </p>
        </div>
          <br>
          <div class="row" id="comment" style="overflow-y: auto; height:220px;">
          <div class="page-header text-center"><h4>Comments</h4></div>
          <div id="com1">

        </div>
        <div class="tab-pane col-md-11" id="add-comment">
          <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required="" id="name1">
                </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="addComment" id="comment1" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">                    
                  <button type="button" class="btn btn-primary btn-outline btn-sm" onclick="aja('1','name1','comment1','com1');"><i class="fa fa-comment"></i>  Comment</button>&nbsp;
                  <button type="button" class="btn btn-primary btn-outline btn-sm" id="show1" ><i class="fa fa-newspaper-o"></i> Comments</button>
              </div>
            </div>            
          </form>
        </div>
          
        
      </div>
</div>   
    
  </div>      
</div>
<div class="modal-footer" style="height:auto;">
<div class="row">
<div class="col-md-10 col-sm-10">
<!--Social  -->
<div class="text-left pull-left">          
<a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
<a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
<a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
<a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
</div>
<!-- /Social -->
</div>
<div class="col-md-2 col-sm-2">
<button type="button" class="btn btn-primary btn-outline btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back </button>        
</div>
</div>  
</div>
    </div>
  </div>
</div>
<!-- /one Modal -->

<!-- Modal two-->
<div class="modal fade" id="two" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Project # <small>Something</small></h2>
        
      </div>
      <div class="modal-body" style="max-height:500px;" >
        <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="img/dsc_0744.jpg" class="img img-responsive img-thumbnail"/>
          </div>
          <div class="col-md-7 col-sm-12 thumbnail">
        <div class="row" style="overflow-y: auto; height:auto;max-height: 150px;">
          <p class="text-justify" style="margin:0 20px;">
             1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!
          </p>
        </div>
          <br>
          <div class="row" id="comment" style="overflow-y: auto; height:220px;">
          <div class="page-header text-center"><h4>Comments</h4></div>
          <div id="com2">

        </div>
        <div class="tab-pane col-md-11" id="add-comment">
          <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required="" id="name2">
                </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="addComment" id="comment2" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">                    
                  <button type="button" class="btn btn-primary btn-outline btn-sm" onclick="aja('2','name2','comment2','com2');"><i class="fa fa-comment"></i>  Comment</button>&nbsp;
                  <button type="button" class="btn btn-primary btn-outline btn-sm" id="show2" ><i class="fa fa-newspaper-o"></i> Comments</button>
              </div>
            </div>            
          </form>
        </div>
          
      </div>
</div>
          
          
        </div>
        
       <div class="modal-footer" style="height:auto;">
        <div class="row">
        <div class="col-md-10 col-sm-10">
        <!--Social  -->
        <div class="text-left pull-left">          
        <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
        <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
        <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
        </div>
        <!-- /Social -->
        </div>
        <div class="col-md-2 col-sm-2">
        <button type="button" class="btn btn-primary btn-outline btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back </button>        
        </div>
        </div>  
        </div>
      
    </div>
      
    </div>
  </div>
</div>
<!-- /two Modal -->

<!-- Modal three-->
<div class="modal fade" id="three" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Project #<small>something</small></h2>
        
      </div>
      <div class="modal-body" style="max-height:500px;">
        <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="img/dsc_0745 (1).jpg" class="img img-responsive img-thumbnail"/>
          </div>
          <div class="col-md-7 col-sm-12 thumbnail" >
        <div class="row" style="overflow-y: auto; height:auto;max-height: 150px;">
          <p class="text-justify" style="margin:0 20px;">
             1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!
          </p>
        </div>
          <br>
          <div class="row" id="comment" style="overflow-y: auto; height:220px;">
          <div class="page-header text-center"><h4>Comments</h4></div>
          <div id="com3">

        </div>
        <div class="tab-pane col-md-11" id="add-comment">
          <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required="" id="name3">
                </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="addComment" id="comment3" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">                    
                  <button type="button" class="btn btn-primary btn-outline btn-sm" onclick="aja('3','name3','comment3','com3');"><i class="fa fa-comment"></i>  Comment</button>&nbsp;
                  <button type="button" class="btn btn-primary btn-outline btn-sm" id="show3" ><i class="fa fa-newspaper-o"></i> Comments</button>
              </div>
            </div>            
          </form>
        </div>
          
      </div>
</div>
          
          
        </div>
        
        <!--Social  -->
        <div class="modal-footer" style="height:auto;">
        <div class="row">
        <div class="col-md-10 col-sm-10">
      <!--Social  -->
        <div class="text-left pull-left">
          
          <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
          <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
          <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
        </div>
        <!-- /Social -->
        </div>
        <div class="col-md-2 col-sm-2">
        <button type="button" class="btn btn-primary btn-outline btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back </button>
        </div>
        </div>
      </div>
      
    </div>
      
    </div>
  </div>
</div>
<!-- /three Modal -->


<!-- Modal four-->
<div class="modal fade" id="four" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Project # <small>something</small></h2>
        
      </div>
      <div class="modal-body" style="max-height:500px;">
        <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="img/dsc_0257.jpg" class="img img-responsive img-thumbnail"/>
          </div>
          <div class="col-md-7 col-sm-12 thumbnail" >
        <div class="row" style="overflow-y: auto; height:auto;max-height: 150px;">
          <p class="text-justify" style="margin:0 20px;">
             1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!
          </p>
        </div>
          <br>
          <div class="row" id="comment" style="overflow-y: auto; height:220px;">
          <div class="page-header text-center"><h4>Comments</h4></div>
          <div id="com4">

        </div>
        <div class="tab-pane col-md-11" id="add-comment">
          <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required="" id="name4">
                </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="addComment" id="comment4" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">                    
                  <button type="button" class="btn btn-primary btn-outline btn-sm" onclick="aja('4','name4','comment4','com4');"><i class="fa fa-comment"></i>  Comment</button>&nbsp;
                  <button type="button" class="btn btn-primary btn-outline btn-sm" id="show4" ><i class="fa fa-newspaper-o"></i> Comments</button>
              </div>
            </div>            
          </form>
        </div>
         
      </div>
</div>
          
          
        </div>
        
        <!--Social  -->
        <div class="modal-footer" style="height:auto;">
        <div class="row">
        <div class="col-md-10 col-sm-10">
      <!--Social  -->
        <div class="text-left pull-left">
          
          <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
          <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
          <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
        </div>
        <!-- /Social -->
        </div>
        <div class="col-md-2 col-sm-2">
        <button type="button" class="btn btn-primary btn-outline btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back </button>
        </div>
        </div>
      </div>
      </div>
      
    </div>
      
    </div>
  </div>
</div>
<!-- /four Modal -->

<!-- Modal five-->
<div class="modal fade" id="five" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Project# <small>Something</small></h2>
        
      </div>
      <div class="modal-body" style="max-height:500px;">
        <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="img/dsc_0744.jpg" class="img img-responsive img-thumbnail"/>
          </div>
          <div class="col-md-7 col-sm-12 thumbnail" >
        <div class="row" style="overflow-y: auto; height:auto;max-height: 150px;">
          <p class="text-justify" style="margin:0 20px;">
             1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!
          </p>
        </div>
          <br>
          <div class="row" id="comment" style="overflow-y: auto; height:220px;">
          <div class="page-header text-center"><h4>Comments</h4></div>
          <div id="com5">

        </div>
        <div class="tab-pane col-md-11" id="add-comment">
          <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required="" id="name5">
                </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="addComment" id="comment5" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">                    
                  <button type="button" class="btn btn-primary btn-outline btn-sm" onclick="aja('5','name5','comment5','com5');"><i class="fa fa-comment"></i>  Comment</button>&nbsp;
                  <button type="button" class="btn btn-primary btn-outline btn-sm" id="show5" ><i class="fa fa-newspaper-o"></i> Comments</button>
              </div>
            </div>            
          </form>
        </div>
         
      </div>
</div>
          
          
        </div>
        
        <div class="modal-footer" style="height:auto;">
        <div class="row">
        <div class="col-md-10 col-sm-10">
      <!--Social  -->
        <div class="text-left pull-left">
          
          <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
          <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
          <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
        </div>
        <!-- /Social -->
        </div>
        <div class="col-md-2 col-sm-2">
        <button type="button" class="btn btn-primary btn-outline btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back </button>
        </div>
        </div>
      </div>
      
    </div>
      
    </div>
  </div>
</div>
<!-- /five Modal -->


<!-- Modal six-->
<div class="modal fade" id="six" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Project#<small>Android News</small></h2>
        
      </div>
      <div class="modal-body" style="max-height:500px;">
        <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="img/dsc_0745 (1).jpg" class="img img-responsive img-thumbnail" />
          </div>
          <div class="col-md-7 col-sm-12 thumbnail">
        <div class="row" style="overflow-y: auto; height:auto;max-height: 150px;">
          <p class="text-justify" style="margin:0 20px;">
             1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio, video and other content and upload via mobile phones for editorial review. Bringing real news in real time to a wider audience!
          </p>
        </div>
          <br>
          <div class="row" id="comment" style="overflow-y: auto; height:220px;">
          <div class="page-header text-center"><h4>Comments</h4></div>
          <div id="com6">

        </div>
        <div class="tab-pane col-md-11" id="add-comment">
          <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required="" id="name6">
                </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Comment</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="addComment" id="comment6" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">                    
                  <button type="button" class="btn btn-primary btn-outline btn-sm" onclick="aja('6','name6','comment6','com6');"><i class="fa fa-comment"></i>  Comment</button>&nbsp;
                  <button type="button" class="btn btn-primary btn-outline btn-sm" id="show6" ><i class="fa fa-newspaper-o"></i> Comments</button>
              </div>
            </div>            
          </form>
        </div>
      </div>
</div>
          
          
        </div>
        
        <div class="modal-footer" style="height:auto;">
        <div class="row">
        <div class="col-md-10 col-sm-10">
      <!--Social  -->
        <div class="text-left pull-left">
          
          <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
          <a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
          <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a>
        </div>
        <!-- /Social -->
        </div>
        <div class="col-md-2 col-sm-2 pull-right">
        <button type="button" class="btn btn-primary btn-outline btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back </button>
        </div>
        </div>
      </div>
      
    </div>
      
    </div>
  </div>
</div>
<!-- /six Modal -->





<!-- teams -->

<!-- noorin -->
 <div class="modal fade" id="noorin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $norin1; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $norin2; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/Noorin.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="https://www.linkedin.com/profile/view?id=102530295&authType=NAME_SEARCH&authToken=fsA5&locale=en_US&trk=tyah2&trkInfo=idx%3A1-1-1%2CtarId%3A1422539059964%2Ctas%3Anoorin+ " target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/EshaanNoorin" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i><?php echo $back; ?></button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /noorin-->

<!-- ????? -->
 <div class="modal fade" id="aa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel"><b>???????????</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              ?????????????????????????????????????????????????????????????????
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i><?php echo $back; ?></button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /Omar Mansoor Ansari-->

<!-- Omar Mansoor Ansari -->
 <div class="modal fade" id="omar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal1; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal2; ?>   
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/omarphoto.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="http://af.linkedin.com/in/omansari/" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/CyberMullah" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /Omar Mansoor Ansari-->

<!-- baseer baheer -->
 <div class="modal fade" id="baseer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal3; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
          <?php echo $modal4; ?>  
          </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/baseerphoto.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="http://af.linkedin.com/in/bbaheer" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/bbaheer" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /baseer baheer-->


<!-- shabana -->
 <div class="modal fade" id="shabana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal5; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
          <?php echo $modal6; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/shabana.jpg" />
         </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="https://www.linkedin.com/profile/view?id=196274210&trk=nav_responsive_tab_profile" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/shabanamansoor1" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /shabana-->

<!-- massound -->
 <div class="modal fade" id="mass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal7; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal8; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/massooud.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="http://af.linkedin.com/in/MassoudAsgharzada " target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/#!/massoud1212" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /massoud-->

<!-- elham -->
 <div class="modal fade" id="elham" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal9; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
             <?php echo $modal10; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/elham.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /elham-->

<!-- akmal -->
 <div class="modal fade" id="akmal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title<?php echo $txtcenterclass; ?> " id="myModalLabel"><b><?php echo $modal11; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal12; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/akmal.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="www.twitter.com/akeearzhang" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="www.linkedin.com/pub/akmalarzhang" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /akmal-->

<!-- three other model still remain -->

<!-- zia -->
 <div class="modal fade" id="zia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel"><b><?php echo $modal13; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal14; ?> 
           </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/zia.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="https://www.linkedin.com/home?trk=nav_responsive_tab_home" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/Zia12mommand" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /zia-->

<!-- abdulrahman -->
 <div class="modal fade" id="rahman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal15; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal16; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/abdulrahman.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="http://af.linkedin.com/in/absherzad" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/#!/absherzad" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /abdulrahman-->

<!-- mahmood -->
 <div class="modal fade" id="mahmood" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal17; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal18; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/mahmood.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="http://www.facebook.com/mahmood.asgharzada"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
          <a href="http://www.de.linkedin.com/pub/mahmood-asgharzada/7a/702/b6b" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /mahmood-->

<!-- nasrat -->
 <div class="modal fade" id="nasrat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal19; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal20; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/nasratphoto.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="#" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="#" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /nasrat-->

<!-- yaser -->
 <div class="modal fade" id="yaser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal21; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal22; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/yaser.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="http://af.linkedin.com/pub/yaser-akrami/4b/637/51" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="http://herathost.com/twitter.com/#!/yaserakrami" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /yaser-->

<!-- qarar -->
 <div class="modal fade" id="qarar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal23; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal24; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/qarar.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /qarar-->

<!-- hogai -->
 <div class="modal fade" id="hogai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal25; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal26; ?>
            </p>
          </div>
          <div class="col-md-4  col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /hogai-->

<!-- sakhi -->
 <div class="modal fade" id="sakhi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal27; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal28; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /sakhi-->

<!-- asmat -->
 <div class="modal fade" id="asmat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal29; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal30; ?>
            </p>
          </div>
          <div class="col-md-4  col-sm-4">
            <img src="img/asmat.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /asmat-->

<!-- aimal -->
 <div class="modal fade" id="aimal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal31; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
             <?php echo $modal32; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/aimal.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /aimal-->



<!-- nooria -->
 <div class="modal fade" id="nooria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal33; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal34; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /nooria-->


<!-- khwaja -->
 <div class="modal fade" id="khwaja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal35; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal36; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/khawaja.JPG" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="https://www.linkedin.com/in/seddiqi" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/SeddiqiHamed" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /khwaja-->

<!-- freshta -->
 <div class="modal fade" id="freshta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal37; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
                <?php echo $modal38; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /freshta-->


<!-- ahmadi -->
 <div class="modal fade" id="ahmadi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal39; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
                <?php echo $modal40; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /ahmadi-->

<!-- Bronwyn -->
 <div class="modal fade" id="Bronwyn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal41; ?>
</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
                 <?php echo $modal42; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/Bronwyn.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          
          <!-- <a href="#"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a> -->
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
          <!-- <a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a> -->
          <!-- <a href="#"><i id="social" class="fa fa-globe fa-3x social-em"></i></a> -->
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /bowryn-->



<!-- sharmini -->
 <div class="modal fade" id="sharmini" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal43; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal44; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/sharmini.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /sharmini-->

<!-- abdullah -->
 <div class="modal fade" id="rahimee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal45; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
            <?php echo $modal46; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/abdullah.JPG" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="https://af.linkedin.com/in/abrahimee" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/abdullahrahemee" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /abdullah-->

<!-- policy -->
 <div class="modal fade" id="pol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title text-center" id="myModalLabel"><b><?php echo $privcy1; ?></b></h2>
        
      </div>
      <div class="modal-body" style="min-height:75%;">
        <div class="container">
          <div class="col-md-12 col-sm-12">
          <p>
          <?php echo $privcy2; ?>
          </p>
          <ul>
         <?php echo $privcy3; ?>
          </ul>
          <p>
             <?php echo $privcy4; ?>
          </p>
           </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i><?php echo $back; ?></button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /policy-->



<!-- download -->
 <div class="modal fade" id="down" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title text-center" id="myModalLabel"><b> <?php echo $privcy5; ?></b></h2>
        
      </div>
      <div class="modal-body" style="height:70%;">
      <br><br>
        <div class="row">
          <h5 class="text-center"> <?php echo $privcy6; ?></h5>
        </div>
        <br>
        <div class="row" >
      <div class="col-md-offset-3">
    <ul class="ds-btn">
     <li>
             <a class="btn btn-lg btn-info" href="upload/iLabs_Call for Application_En.pdf">
          <i class="fa fa-download fa-3x pull-left"></i><span><b> <?php echo $privcy7; ?></b></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-primary" href="upload/iLabs_Call for Application_Ps.pdf">
          <i class="fa fa-download fa-3x pull-left"></i><span> <?php echo $privcy8; ?></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-warning " href="upload/iLabs_Call for Application_Dr.pdf">
         <i class="fa fa-download fa-3x pull-left"></i><span> <?php echo $privc9; ?></span></a> 
            
        </li>
    </ul>
    </div>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /Download-->



<!-- ghayor -->
 <div class="modal fade" id="ghayor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal47; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal48; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ghayoor.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">          
          <a href="http://linkd.in/PkzJeQ" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/bawary1" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /ghayor-->

<!-- naikbeen -->
 <div class="modal fade" id="naikbeen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal49; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal50; ?>             
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/naikbeen.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">        
          <a href="af.linkedin.com/in/naikbeennaikpay/" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="twitter.com/naikbeen" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /naikbeen-->

<!-- jamshid -->
 <div class="modal fade" id="jamshid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal51; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal52; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/jamshid.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="https://af.linkedin.com/in/jamshidhashimi" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/jamshidhashimi" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /jamshid-->


<!-- halim -->
 <div class="modal fade" id="halim" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal53; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal54; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /halim-->


<!-- kakar -->
 <div class="modal fade" id="kakar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal55; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal56; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /kakar-->


<!-- mohib -->
 <div class="modal fade" id="mohib" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal57; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal58; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /mohib-->

<!-- israr -->
 <div class="modal fade" id="israr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal59; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal60; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/ava.png" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="" target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /israr-->

<!-- asad -->
 <div class="modal fade" id="asad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title <?php echo $txtcenterclass; ?>" id="myModalLabel"><b><?php echo $modal61; ?></b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8 <?php echo $fclas; ?>">
            <p class="lead">
              <?php echo $modal62; ?>
            </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="img/asad.jpg" />
          </div>
        </div>
        
        <!--Social  -->
        <div class="text-left center-block">
          <a href="https://af.linkedin.com/in/asadhasankbl" target="_blank"><i id="social" class="fa fa-linkedin-square fa-3x social-tw"></i></a>
          <a href="https://twitter.com/asadhasankbl " target="_blank"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        </div>
        <!-- /Social -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /asad-->