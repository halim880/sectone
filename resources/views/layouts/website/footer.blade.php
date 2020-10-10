
    <footer class="page-footer teal">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta consequatur alias recusandae, assumenda corporis expedita, nam minima commodi laboriosam accusantium necessitatibus ut odit vel quas ex voluptatem temporibus officia!</p>
                
            </div>
            <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
                @auth
                    <li >
                        <form id="logout-form" action="{{route('logout') }}" method="POST">
                            @csrf
                            <button class="btn orange darken-2 white-text">Logout</button>
                        </form>
                    </li>
                @else
                    <a class="waves-effect waves-light btn modal-trigger" data-target="login-modal">Login</a>
                @endauth
            </ul>
            </div>

            <div id="login-modal" class="modal" style="max-width: 400px;">
                <div class="modal-content">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="input-field">
                            <input type="email" id="email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" name="password">
                            <label for="password">Password</label>
                        </div>
                        <button class="btn">Login</button>
                        <a href="">Forgot password?</a>
                    </form>
                </div>
              </div>

        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
            © 2020 Copyright
        <a class="grey-text text-lighten-4 right" href="#!">Facebook</a>
        </div>
        </div>
    </footer>

    <style scoped>

    </style>