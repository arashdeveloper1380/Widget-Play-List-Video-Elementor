<?php
class Elementor_play_list_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'play-list';
	}

	public function get_title() {
		return esc_html__( 'arash play-list', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-slider-vertical';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
        $option = array(
            'post_type'=>'video',
            'posts_per_page'=>10
        );
        $video = WP_Query($option);
		?>
        <style>
            *{
                font-family: 'Poppins', sans-serif;
                margin:0; padding:0;
                box-sizing: border-box;
                outline: none; border:none;
                text-decoration: none;
                text-transform: capitalize;
                }

                body{
                background-color: coral;
                padding:20px;
                }

                .container{
                max-width: 1200px;
                margin:100px auto;
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                gap:20px;
                }

                .container .main-video-container{
                flex:1 1 700px;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0,0,0,.1);
                background-color: #fff;
                padding:15px;
                }

                .container .main-video-container .main-video{
                margin-bottom: 7px;
                border-radius: 5px;
                width: 100%;
                }

                .container .main-video-container .main-vid-title{
                font-size: 20px;
                color:#444;
                }

                .container .video-list-container{
                height: 485px;
                overflow-y: scroll;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0,0,0,.1);
                background-color: #fff;
                padding:15px;
                }

                .container .video-list-container::-webkit-scrollbar{
                width: 10px;
                }

                .container .video-list-container::-webkit-scrollbar-track{
                background-color: #fff;
                border-radius: 5px;
                }

                .container .video-list-container::-webkit-scrollbar-thumb{
                background-color: #444;
                border-radius: 5px;
                }

                .container .video-list-container .list{
                display: flex;
                align-items: center;
                gap:15px;
                padding:10px;
                background-color: #eee;
                cursor: pointer;
                border-radius: 5px;
                margin-bottom: 10px;
                }

                .container .video-list-container .list:last-child{
                margin-bottom: 0;
                }

                .container .video-list-container .list.active{
                background-color: #444;
                }

                .container .video-list-container .list.active .list-title{
                color:#fff;
                }

                .container .video-list-container .list .list-video{
                width: 100px;
                border-radius: 5px;
                }

                .container .video-list-container .list .list-title{
                font-size: 17px;
                color:#444;
                }


                @media (max-width:1200px){

                .container{
                    margin:0;
                }

                }

                @media (max-width:450px){

                .container .main-video-container .main-vid-title{
                    font-size: 15px;
                    text-align: center;
                }

                .container .video-list-container .list{
                    flex-flow: column;
                    gap:10px;
                }

                .container .video-list-container .list .list-video{
                    width: 100%;
                }

                .container .video-list-container .list .list-title{
                    font-size: 15px;
                    text-align: center;
                }

                }
        </style>
        <div class="container">
            <div class="video-list-container">
                <?php while($video->have_posts()): $video->the_post(); ?>
                    <div class="list">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="list-video" alt="">
                        <h3 class="list-title"><?php the_title(); ?></h3>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>

		<?php
	}
}