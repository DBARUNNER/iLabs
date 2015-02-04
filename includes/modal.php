

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
        <h2 class="modal-title" id="myModalLabel"><b>Noorin Khuja Eshaan</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Noorin has obtained her Bachelors from Computer Science Faculty of Kabul University in Afghanistan and has obtained her Masters In Internet Systems and E-Business from faculty of Computing Sciences of Durham University in England. She works at Internews as Innovation Program Coordinator.
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
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
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
          <div class="col-md-8 col-sm-8">
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
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
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
        <h2 class="modal-title" id="myModalLabel"><b>Omar Mansoor Ansari</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Omar is Afghanistan’s senior ICT executive and an award-winning technology entrepreneur. Since 1999, he has had an active part in shaping the local IT industry. He founded and worked with number of associations, networks, and built and supported startups that are taking active role in socioeconomic development on local, regional and international levels. Omar is Director of Founder Institute Kabul, and full time President of TechNation. 
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
        <h2 class="modal-title" id="myModalLabel"><b>Baseer Ahmad Baheer</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Baseer is Afghanistan’s top-notched web engineer with years of experience in teaching, developing technologies and creating tools and applications for desktop, web and mobile. He consults for the World Bank and teaches web systems and technologies at Kabul University.
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
        <h2 class="modal-title" id="myModalLabel"><b>Shabana Mansoory</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Shabana Mansoory is Bachelor of Computer science, graduated from Computer science faculty of Kabul University in 2012. She started her professional career as Database development intern in an international NGO, Chemonics international in Kabul by 2012. She has also been considered as revolutionary in women leadership in her activities in world’s largest student run organization “AIESEC Afghanistan” from being an exchange participant to becoming the first female executive board member in 2013- 2014. 
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
        <h2 class="modal-title" id="myModalLabel"><b>Massoud Asgharzada</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Massoud is Chief Executive Officer of Herat Host. He has over 6 years experiences in programming, web applications development, website designing and network implementations. Massoud works and teaches, he is technical adviser and computer lecturer in higher education institutes and NGOs in Herat. 
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
        <h2 class="modal-title" id="myModalLabel"><b>Elham Kohistani</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Partnerships Officer
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
        <h2 class="modal-title" id="myModalLabel"><b>Akmal Arzhang</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              In 2013, Akmal founded ToNext, a software development company, which is one of the best management system development company in Afghanistan. Previously, he was a part of a software development team called Red Developers. Akmal has also been involved in educational programs, and he is the new innovations manager at CodeWeekend.
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
        <h2 class="modal-title" id="myModalLabel"><b>Ziaullah Momand</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Ziaullah Momand is instructor in kabul university, computer science faculty, Has 3years experiences in programming, web application development, mobile application development. Ziuallah Momand works in TechNation as web engineer.
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
        <h2 class="modal-title" id="myModalLabel"><b>Abdul Rahman Sherzad</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Abdul Rahman, has years experiences teaching Information Database Management System, Application and Web programming in Herat University and other related Higher Education Institutes. He also works as Technical Adviser of Herat Host with years’ experiences in database development.
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
        <h2 class="modal-title" id="myModalLabel"><b>Mahmood Asgharzada</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Mahmood is software engineer at Herat Host. He has years of experience in apps development. He has taught in Herat University for years and has be building software applications for desktop and mobile.
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
        <h2 class="modal-title" id="myModalLabel"><b>Nasrat Khalid</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Nasrat Khalid is an innovation activist currently working with one of the leading development donors previously engaged with private and public sector. Nasrat's work focuses on the economic and social impacts of new technologies and development of ideas on how technology could be used in fragile and developing states such as Afghanistan. He has also mentored and trained hundreds of Afghans in different subject matters. 
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
        <h2 class="modal-title" id="myModalLabel"><b>Yaser Akrami</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Yaser has years experiences in programming, web applications development and website designing. He works as database developer and project manager of Herat Host and teaches database and web application in higher education institutes. 
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
        <h2 class="modal-title" id="myModalLabel"><b>Majeedullah Qarar</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
             this place have to be filled emidiatly!!
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
        <h2 class="modal-title" id="myModalLabel"><b>Ogai Ahmadi</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
            waiting for ms Ogai ahmadi's bio.
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
        <h2 class="modal-title" id="myModalLabel"><b>Sakhi Shokoh</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              contant will be provided as soon as possible
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
        <h2 class="modal-title" id="myModalLabel"><b>Asmat Ullah</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              <p>an experienced, visionary and goal oriented senior executive with more than 14 years of demonstrated working experience with USAID, UNICEF, United Nations Department of Peace Keeping Operations (UNDPKO), Armed Forces (US Army, NATO, ISAF, Afghan Government and Private Sector as well as development multiple-donor funded programs / projects in Afghanistan as well as in the region.</p>
              <p>I have extensive experience in Information Technology ,administration, operations, managing development multiple donor funded projects (Small – Large) scale with excellent hands on Information Technology, programs & projects management, operations management , business development, workforce development, communications management, monitoring & Control, project reporting to meet but exceed  stakeholders expectations, remote management developing and implementing multiple platform development projects / programs.</p>
              <p>I am multilingual and fluent in Pashto, Dari/Persian English, Urdu and understanding level of Arabic,</p>
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
        <h2 class="modal-title" id="myModalLabel"><b>Muhammad Aimal Marjan</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              this part will be fill soon.
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
        <h2 class="modal-title" id="myModalLabel"><b>Mrs. Nooria Rezazada Rahim</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              A Fulbright Scholar with a Masters Degree in Information Technology majoring in Human Computer Interaction from the renowned Rochester Institute of Technology in New York, USA, Mrs. Rahim brings with her years of experience in the Afghan IT sector. Her work with Mobile Government through Paywast, Tedx Fulbright, USAID IT initiatives, European Commission Programs and more has given her great insight into the challenges and demands of this sector and she hopes to encourage growth and development of IT in Afghanistan particularly focusing on increasing female participation in technology initiatives.
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
        <h2 class="modal-title" id="myModalLabel"><b>Khawaja Hamed Seddiqi</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
               Khawaja Hamed Seddiqi is Events manager  and Software developer at Technation Afghanistan.
He has  bachelor degree in computer science  Software Engineering  from Kabul university. He has one year experience in web and mobile application development.
He has developed web and mobile applications for Technation Afghanistan.

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
        <h2 class="modal-title" id="myModalLabel"><b>Freshtah Hemmati</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
                Press Officer
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
        <h2 class="modal-title" id="myModalLabel"><b>Nooria Ahmadi</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
                 Developer Technation
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
        <h2 class="modal-title" id="myModalLabel"><b>Bronwyn Jones
</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
                  Civil Society and Media Manager at Internews
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
        <h2 class="modal-title" id="myModalLabel"><b>Sharmini Boyle</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Country Director
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
        <h2 class="modal-title" id="myModalLabel"><b>Abdullah Rahimee</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Abdullah Rahimee is a WEB and Database Developer, and he is skillful person. He has background of developing many kind of appliaction for web and desktop. He has creative mind in web application developing.
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
        <h2 class="modal-title text-center" id="myModalLabel"><b>PRIVACY POLICY </b></h2>
        
      </div>
      <div class="modal-body" style="min-height:75%;">
        <div class="container">
          <div class="col-md-12 col-sm-12">
          <p>
            This website is operated by TechNation where you may post Personal Information. Personal Information generally means information which might reasonably be used to specifically identify you and may include information such as your name, address, age, credit card details, email and phone number. We collect such personal information when you provide it to us, such as when you:
          </p>
          <ul>
            <li>Subscribe to iLabs</li>
            <li>Register to post comments</li>
            <li>Purchase software license or a product</li>
            <li>Sign up for email newsletters</li>
            <li>Participate in surveys</li>
            <li>Communicate with us.</li>
          </ul>
          <p>Users contacting this website and/or its owners do so at their own discretion and provide any such personal details requested at their own risk. Your personal information is kept private and stored securely until a time it is no longer required or has no use. Every effort has been made to ensure a safe and secure form to email submission process but advise users using such form to email processes that they do so at their own risk. Please note that iLabs or TechNation is not responsible for the information you volunteer about yourself in the discussions in our forums, features, comments box or other publicly accessible interaction, or information that you choose to make public or other areas that allow users to upload or post content. We discourage users from posting personally identifiable information in this fashion, and any personally identifiable information you post to these areas is not covered by this Policy.</p>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-angle-left"></i>  Back to Home Page</button>
        
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
        <h2 class="modal-title text-center" id="myModalLabel"><b>Download Your Prefered Language</b></h2>
        
      </div>
      <div class="modal-body" style="height:70%;">
      <br><br>
        <div class="row">
          <h5 class="text-center">In which language do you want to download?</h5>
        </div>
        <br>
        <div class="row" >
      <div class="col-md-offset-3">
    <ul class="ds-btn">
     <li>
             <a class="btn btn-lg btn-info" href="upload/iLabs_Call for Application_En.pdf">
          <i class="fa fa-download fa-3x pull-left"></i><span><b>In<br><small>English </small></b></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-primary" href="upload/iLabs_Call for Application_Ps.pdf">
          <i class="fa fa-download fa-3x pull-left"></i><span>In<br><small>Pashto</small></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-warning " href="upload/iLabs_Call for Application_Dr.pdf">
         <i class="fa fa-download fa-3x pull-left"></i><span>In<br><small>Dari</small></span></a> 
            
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
        <h2 class="modal-title" id="myModalLabel"><b>Abdul Ghayoor Bawary</b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Abdul Ghayoor Bawary is the Founder /CEO of Experts Valley, also has found two more companies back in 2009 & 2012 as UPLS & Cactus Technologies respectively, Ghayoor has more than 8 years of Professional Experience in the field of Technology with various Local and International Organizations, and 4 years of Entrepreneurship skills. He also currently works as an ISP Engineer with MultiNet ISP AF.
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
        <h2 class="modal-title" id="myModalLabel"><b>Naikbeen Naikpay </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Naikbeen Naikpay has more than 6 years of working experience in Information Technology. Psychology & Educational Science Graduate of Kabul University and holds Diploma in Information technology. He is CTO of RN Technologies since 2012 and Founder & CEO of SmartMaktab.
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
        <h2 class="modal-title" id="myModalLabel"><b>Jamshid Hashimi </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Jamshid Hashimi is CEO/Co-Founder at CodeZone. He has work experience of more than 6 years in system, software and web application development. Beyond CodeZone, Mr. Hashimi is the founder of the biggest developer community in Afghanistan, CodeWeekend, Global Web Manager and Executive team member at Afghan Professional Network (APn) and Apps for Good Expert at Apps for Good open-source education technology movement based in London.
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
        <h2 class="modal-title" id="myModalLabel"><b>Halim Fida </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              
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
        <h2 class="modal-title" id="myModalLabel"><b>Sanzar Kakar </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              
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
        <h2 class="modal-title" id="myModalLabel"><b>Hamdullah Mohib </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              
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
        <h2 class="modal-title" id="myModalLabel"><b>Israr Ahmad Khan </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              
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
        <h2 class="modal-title" id="myModalLabel"><b>Asad Hasan </b></h2>
        
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <p class="lead">
              Mr. Asad Hasan is Communications, Online & Digital Media Expert who has almost 16 years qualifying experience in different forms of multimedia such as campaign communications, electronic & ads communications, online, social communications & digital print communications. He also has experience in building online & community presence for organizations via multimedia, imagery, websites, illustration & other forms of advertisement designing, development & implementation.
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