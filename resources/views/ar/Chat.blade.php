@extends('ar.layout')
@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">

  <link href="css/style.css" rel="stylesheet">


      <main class="main-content bgc-grey-100" id="app">
        <div id="mainContent">
          <div class="full-container" style="left:0px;top:100px">
            <div class="peers fxw-nw pos-r">
              <div class="peer bdR" id="chat-sidebar">
                <div class="layers h-100">
                  <div class="bdB layer w-100"><input type="text" placeholder="Search contacts..." name="chatSearch" class="form-constrol p-15 bdrs-0 w-100 bdw-0"></div>
                  <div class="layer w-100 fxg-1 scrollable pos-r">

                    @foreach($user->projects as $project)
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="https://randomuser.me/api/portraits/men/1.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">{{$project->user->name}}</h6>
                      </div>
                    </div>

                    @endforeach






                  </div>
                </div>
              </div>
              <div class="peer peer-greed" id="chat-box">
                <div class="layers h-100">
                  <div class="layer w-100">
                    <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
                      <div class="peers ai-c">
                        <div class="peer d-n@md+"><a href="" title="" id="chat-sidebar-toggle" class="td-n c-grey-900 cH-blue-500 mR-30"><i class="ti-menu"></i></a></div>
                        <div class="peer mR-20"><img src="https://randomuser.me/api/portraits/men/12.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                        <div class="peer">
                          <h6 class="lh-1 mB-0">@{{chatWith.name}}</h6>
                        </div>
                      </div>
                      <div class="peers"><a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title=""></a><a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title=""> </a><a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md" title=""><i class="ti-more"></i></a></div>
                    </div>
                  </div>
                  <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r" id="chat">
                    <div class="p-20 gapY-15" v-for="message in messages">

                      <div class="peers fxw-nw" v-if="message.from_id != user.id" >
                        <div class="peer mR-20"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/11.jpg" alt=""></div>
                        <div class="peer peer-greed">
                          <div class="layers ai-fs gapY-5">
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10"><small>10:00 AM</small></div>
                                <div class="peer-greed"><span>@{{message.message}}</span></div>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>





                      <div class="peers fxw-nw ai-fe" v-if="message.from_id == user.id">
                        <div class="peer ord-1 mL-20"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/12.jpg" alt=""></div>
                        <div class="peer peer-greed ord-0">
                          <div class="layers ai-fe gapY-10">
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                <div class="peer-greed ord-0"><span>@{{message.message}}</span></div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>



                    </div>
                  </div>
                  <div class="layer w-100">
                    <div class="p-20 bdT bgc-white">
                      <div class="pos-r"><input v-model="message" type="text" class="form-control bdrs-10em m-0" placeholder="Say something..."> <button v-on:click="addMessage(message)" type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i
                            class="fa fa-paper-plane-o"></i></button></div>
                    </div>
                    <h2>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  <script type="text/javascript" src="js/vendor.js"></script>
  <script type="text/javascript" src="js/bundle.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

  <script type="module">
  var pusher = new Pusher('cd684f435e5228ec1605', {
  cluster: 'us2'
  });

  var channel = pusher.subscribe('chat');
  channel.bind('add', function(data) {
  // console.log(data);
  app2.updateMessages(data);
  // app.messages.push(JSON.stringify(data));
  });
  var app2 = new Vue({
    el: '#app',
    data: {
      message:'',
      messages: @if($user->type == 0) {!! $user->projects->first()->messages !!} @else {!! $user->DesignerProjects->first()->messages !!} @endif,
      user:{!! $user !!},
      chatWith: @if($user->type == 0) {!! $user->projects->first()->designer !!} @else {!!$user->DesignerProjects->first()->user !!} @endif,
      project:@if($user->type == 0) {!! $user->projects->first() !!} @else {!! $user->DesignerProjects->first() !!} @endif,
    },
    methods: {



        addMessage(message) {
            axios.post('/add-message', {
                from_id:this.user.id,
                to_id:this.chatWith.id,
                project_id:this.project.id,
                message,
            }).then(response => {
              var div = document.getElementById("chat");
div.scrollTop = div.scrollHeight - div.clientHeight;
  this.message = ''
                this.messages.push({
                    message: response.data.message.message,
                    from_id: response.data.message.from_id,
                    to_id:response.data.message.to_id,
                    project_id:response.data.message.project_id,

                });
            });
        },

        updateMessages(message) {
          this.messages.push({
              message: message.message.message,
              from_id: message.message.from_id,
              to_id:message.message.to_id,
              project_id:message.message.project_id,

          });
        }
    }
  })

  </script>
@endsection
