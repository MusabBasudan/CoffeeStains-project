@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Email Page</h2>
            </div>
         </div>
      </div>
      <!-- row -->
      <div class="row">
         <!-- table section -->
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Email Box</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <button href="{{route('admin.settings')}}" type="button" class="btn btn-outline-warning">Edit</button>
                  </div>
               </div>
               <div class="full inbox_inner_section">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full padding_infor_info">
                           <div class="mail-box">
                              <aside class="sm-side">
                                 <div class="user-head">
                                    <a class="inbox-avatar" href="javascript:;">
                                       <img width="65" src="{{asset('backend/assets/images/layout_img/user_img.jpg')}}" alt="#" />
                                    </a>
                                    <div class="user-name">
                                       <h5><a href="#">John David</a></h5>
                                       <span><a href="#">Infotest@gmail.com</a></span>
                                    </div>
                                 </div>
                                 <div class="inbox-body">
                                    <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose">
                                       Compose
                                    </a>
                                    <!-- Modal -->
                                 </div>
                                 <ul class="nav nav-pills nav-stacked labels-category inbox-divider">
                                    <li>
                                       <h4>Categories</h4>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle"></i> Work</a></li>
                                    <li><a href="#"><i class="fa fa-circle"></i> Documents</a></li>
                                    <li><a href="#"><i class="fa fa-circle"></i> Family</a></li>
                                    <li><a href="#"><i class="fa fa-circle"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-circle"></i> Office</a></li>
                                 </ul>
                                 <ul class="nav nav-pills nav-stacked labels-category">
                                    <li>
                                       <h4>Labels</h4>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Family
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Work
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Home
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Children
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Holydays
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Music
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Photography
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <i class="fa fa-circle"></i> Film
                                          <p>I do not think</p>
                                       </a>
                                    </li>
                                 </ul>
                              </aside>
                              <aside class="lg-side">
                                 <div class="inbox-head">
                                    <h3>Inbox (10)</h3>
                                    <form action="#" class="pull-right position search_inbox">
                                       <div class="input-append">
                                          <input type="text" class="sr-input" placeholder="Search Mail">
                                          <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="inbox-body">
                                    <div class="mail-option">
                                       <div class="chk-all">
                                          <div class="btn-group">
                                             <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false"> All <i class="fa fa-angle-down "></i></a>
                                             <ul class="dropdown-menu">
                                                <li><a href="#"> None</a></li>
                                                <li><a href="#"> Read</a></li>
                                                <li><a href="#"> Unread</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="btn-group">
                                          <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                             <i class=" fa fa-refresh"></i>
                                          </a>
                                       </div>
                                       <div class="btn-group hidden-phone">
                                          <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                             More
                                             <i class="fa fa-angle-down "></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                             <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                          </ul>
                                       </div>
                                       <div class="btn-group">
                                          <a data-toggle="dropdown" href="#" class="btn mini blue">
                                             Move to
                                             <i class="fa fa-angle-down "></i>
                                          </a>
                                          <ul class="dropdown-menu">
                                             <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                             <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                          </ul>
                                       </div>
                                       <ul class="unstyled inbox-pagination">
                                          <li><span>1-50 of 234</span></li>
                                          <li>
                                             <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                          </li>
                                          <li>
                                             <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <table class="table table-inbox table-hover">
                                       <tbody>
                                          <tr class="unread">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                   <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message  dont-show">PHPClass</td>
                                             <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                             <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message  text-right">9:27 AM</td>
                                          </tr>
                                          <tr class="unread">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                   <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Google Webmaster </td>
                                             <td class="view-message">Improve the search presence of WebSite</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">March 15</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                   <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">JW Player</td>
                                             <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">March 15</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                   <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Tim Reid, S P N</td>
                                             <td class="view-message">Boost Your Website Traffic</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">April 01</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                   <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                             <td class="view-message">Stop wasting your visitors </td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">May 23</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                   <label class="custom-control-label" for="customCheck6"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="view-message dont-show">WOW Slider </td>
                                             <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">March 14</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                   <label class="custom-control-label" for="customCheck7"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="view-message dont-show">LinkedIn Pulse</td>
                                             <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">Feb 19</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                   <label class="custom-control-label" for="customCheck8"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                             <td class="view-message view-message">Welcome to the Drupal Community</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">March 04</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                   <label class="custom-control-label" for="customCheck9"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Facebook</td>
                                             <td class="view-message view-message">Somebody requested a new password </td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">June 13</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                   <label class="custom-control-label" for="customCheck10"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                             <td class="view-message view-message">Password successfully changed</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">March 24</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                   <label class="custom-control-label" for="customCheck11"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="view-message dont-show">Google+</td>
                                             <td class="view-message">alireza, do you know</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">March 09</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                   <label class="custom-control-label" for="customCheck12"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="dont-show">Zoosk </td>
                                             <td class="view-message">7 new singles we think you'll like</td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">May 14</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                   <label class="custom-control-label" for="customCheck13"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">LinkedIn </td>
                                             <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">February 25</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                   <label class="custom-control-label" for="customCheck14"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="dont-show">Facebook</td>
                                             <td class="view-message view-message">Your account was recently logged into</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">March 14</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                   <label class="custom-control-label" for="customCheck15"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Twitter</td>
                                             <td class="view-message">Your Twitter password has been changed</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">April 07</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                   <label class="custom-control-label" for="customCheck16"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                             <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">July 14</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                   <label class="custom-control-label" for="customCheck17"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="view-message dont-show">AddMe.com</td>
                                             <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">August 10</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                   <label class="custom-control-label" for="customCheck18"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Terri Rexer, S P N</td>
                                             <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">April 14</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                   <label class="custom-control-label" for="customCheck19"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Bertina </td>
                                             <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">June 16</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                   <label class="custom-control-label" for="customCheck20"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                             <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                             <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                             <td class="view-message inbox-small-cells"></td>
                                             <td class="view-message text-right">August 10</td>
                                          </tr>
                                          <tr class="">
                                             <td class="inbox-small-cells">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck21">
                                                   <label class="custom-control-label" for="customCheck21"></label>
                                                </div>
                                             </td>
                                             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                             <td class="view-message dont-show">Facebook</td>
                                             <td class="view-message view-message">Alireza Zare Login faild</td>
                                             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                             <td class="view-message text-right">feb 14</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </aside>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- table section -->
      </div>
   </div>
   @endsection