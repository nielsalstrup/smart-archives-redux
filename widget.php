<?php

class SARWidget extends scbWidget {

    protected $defaults = array(
        'title' => '',
        'description' => 'example'
    );

    function __construct() {
        parent::__construct( 'sar-widget', __( 'Smart Archives Widget', 'smart-archives-redux' ), array(
            'description' => __( 'Archives widget with posts grouped by year and month', 'smart-archives-redux' )
        ) );
    }

    function form( $instance ) {
        echo html( 'p', $this->input( array(
            'type' => 'text',
            'name' => 'title',
            'desc' => __( 'Title:', 'smart-archives-redux' )
        ), $instance ) );

        echo html( 'p', $this->input( array(
            'type' => 'textarea',
            'name' => 'description',
            'desc' => __( 'Description:', 'smart-archives-redux' )
        ), $instance ) );
    }

    function content( $instance ) {
        smart_archives('format=list');
    }
}

scbWidget::init( 'SARWidget' );