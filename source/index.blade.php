@extends('_layouts.master')

@section('body')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><font color="blue">G</font><font color="red">a</font><font color="orange">a</font><font color="purple">u</font><font color="black">l</font><font color="teal">e</font></h1>
      <p class="lead">Gaaule.com is next-generation social-collaboration-platform for community development....</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Step 1</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Connect <small class="text-muted">to</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Member #1</li>
              <li>Member #2</li>
              <li>Member #3</li>
              <li>Member #n</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Invite Friend</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Step 2</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Debate <small class="text-muted">on</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Topic #1</li>
              <li>Topic #2</li>
              <li>Topic #3</li>
              <li>Topic #4</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Define Problem</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Step 3</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Implement <small class="text-muted">in</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Project #1</li>
              <li>Project #2</li>
              <li>Project #3</li>
              <li>Project #4</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-teal">Take action</button>
          </div>
        </div>
      </div>
@endsection
