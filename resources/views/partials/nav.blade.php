
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar>.container-fluid>.collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand"  target="_blank">
        <svg aria-hidden="true" height="24" version="1.1" viewBox="0 0 16 16"><path  d="M16.588,3.411h-4.466c0.042-0.116,0.074-0.236,0.074-0.366c0-0.606-0.492-1.098-1.099-1.098H8.901c-0.607,0-1.098,0.492-1.098,1.098c0,0.13,0.033,0.25,0.074,0.366H3.41c-0.606,0-1.098,0.492-1.098,1.098c0,0.607,0.492,1.098,1.098,1.098h0.366V16.59c0,0.808,0.655,1.464,1.464,1.464h9.517c0.809,0,1.466-0.656,1.466-1.464V5.607h0.364c0.607,0,1.1-0.491,1.1-1.098C17.688,3.903,17.195,3.411,16.588,3.411z M8.901,2.679h2.196c0.202,0,0.366,0.164,0.366,0.366S11.3,3.411,11.098,3.411H8.901c-0.203,0-0.366-0.164-0.366-0.366S8.699,2.679,8.901,2.679z M15.491,16.59c0,0.405-0.329,0.731-0.733,0.731H5.241c-0.404,0-0.732-0.326-0.732-0.731V5.607h10.983V16.59z M16.588,4.875H3.41c-0.203,0-0.366-0.164-0.366-0.366S3.208,4.143,3.41,4.143h13.178c0.202,0,0.367,0.164,0.367,0.366S16.79,4.875,16.588,4.875zM6.705,14.027h6.589c0.202,0,0.366-0.164,0.366-0.366s-0.164-0.367-0.366-0.367H6.705c-0.203,0-0.366,0.165-0.366,0.367S6.502,14.027,6.705,14.027z M6.705,11.83h6.589c0.202,0,0.366-0.164,0.366-0.365c0-0.203-0.164-0.367-0.366-0.367H6.705c-0.203,0-0.366,0.164-0.366,0.367C6.339,11.666,6.502,11.83,6.705,11.83z M6.705,9.634h6.589c0.202,0,0.366-0.164,0.366-0.366c0-0.202-0.164-0.366-0.366-0.366H6.705c-0.203,0-0.366,0.164-0.366,0.366C6.339,9.47,6.502,9.634,6.705,9.634z"></path></svg>
      </a>
      {{ Helper::linkRoute('home', 'Survey System of Nepal', [], ['class' => 'navbar-brand']) }}
    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>{{ Helper::linkRoute('root', 'Home') }}</li>

        @if(!Auth::check())
          <li>{{ Helper::linkRoute('register', 'Register') }}</li>
          <li>{{ Helper::linkRoute('login', 'Login') }}</li>
        @endif
      </ul>

      @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Hello {{ Auth::user()->name }}! <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>{{ Helper::linkRoute('dashboard', 'Dashboard') }}</li>
              <li>{{ Helper::linkRoute('survey.create', 'Create survey') }}</li>
              <li role="separator" class="divider"></li>
              <li>
                {{ Helper::linkRoute('logout', 'Logout', [], ['onclick' => 'event.preventDefault(); logout_form.submit()']) }}
                {!! Helper::openForm('logout', [], ['id' => 'logout_form']) !!}
                {!! Helper::closeForm() !!}
              </li>
            </ul>
          </li>
        </ul>
      @endif

    </div>
  </div>
</nav>

