<!-- form
                       ============================================ -->
<div class="form-area">
    <h3 class="category-headding ">LEAVE A COMMENT</h3>
    <div class="headding-border"></div>
    <form>
        <div class="row">
            <div class="col-sm-6">
                                    <span class="input">
                                            <input class="input_field" type="text" id="input-1">
                                            <label class="input_label" for="input-1">
                                                <span class="input_label_content"
                                                      data-content="Your Name">Your Name</span>
                                    </label>
                                    </span>
            </div>
            <div class="col-sm-6">
                                    <span class="input">
                                            <input class="input_field" type="text" id="input-2">
                                            <label class="input_label" for="input-2">
                                                <span class="input_label_content"
                                                      data-content="Your Email">Your Email</span>
                                    </label>
                                    </span>
            </div>
            <div class="col-sm-12">
                                    <span class="input">
                                            <textarea class="input_field" id="message"></textarea>
                                            <label class="input_label" for="message">
                                                <span class="input_label_content"
                                                      data-content="Your Email">Your Message</span>
                                    </label>
                                    </span>
                <button type="button" class="btn btn-style">Post Your Comment</button>
            </div>
        </div>
    </form>
</div>
<!-- comment box
    ============================================ -->
<div class="comments-container">
    <h1>Comment </h1>
    <ul id="comments-list" class="comments-list">
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="/theme/images/comment-01.jpg" class="img-circle"
                                                 alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
                        <span>hace 20 minutos</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi
                        et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
            <!-- Respuestas de los comentarios -->
            <ul class="comments-list reply-list">
                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="/theme/images/comment-02.jpg" class="img-circle"
                                                     alt=""></div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                            <span>hace 10 minutos</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis
                            animi et iure laudantium vitae, praesentium optio, sapiente distinctio
                            illo?
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="/theme/images/comment-01.jpg" class="img-circle"
                                                     alt=""></div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
                            <span>hace 10 minutos</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis
                            animi et iure laudantium vitae, praesentium optio, sapiente distinctio
                            illo?
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="/theme/images/comment-02.jpg" class="img-circle"
                                                 alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                        <span>hace 10 minutos</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi
                        et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>