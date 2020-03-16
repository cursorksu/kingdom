<?php

class Paginator {

    private $_conn;
    private $_limit;
    private $_page;
    private $_query;
    private $_total;

    public function __construct( $page, $limit, $total ) {

        $this->_limit = $limit;
        $this->_page = $page;
        $this->_total = $total;
    }

    public function createLinks( $links, $list_class ) {
        if ( $this->_limit == 'all' ) {
            return '';
        }

        $last       = ceil( $this->_total / $this->_limit );

        $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
        $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;

        $html       = '<ul class="' . $list_class . '">';

        $class      = ( $this->_page == 1 ) ? "disabled" : "";
        $html       .= '<li class="page-item ' . $class . '"><a class="page-link" href="?page=' . ( $this->_page - 1 ) . '">PREVIOUS</a></li>';

        if ( $start > 1 ) {
            $html   .= '<li class="page-item"><a class="page-link" href="?page=1">1</a></li>';
            $html   .= '<li class="page-item disabled"><span>...</span></li>';
        }

        for ( $i = $start ; $i <= $end; $i++ ) {
            $class  = ( $this->_page == $i ) ? "active" : "";
            $html   .= '<li class="page-item ' . $class . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }

        if ( $end < $last ) {
            $html   .= '<li class="page-item disabled"><span>...</span></li>';
            $html   .= '<li class="page-item"><a class="page-link" href="?page=' . $last . '">' . $last . '</a></li>';
        }

        $class      = ( $this->_page == $last ) ? "disabled" : "";
        $html       .= '<li class="page-item ' . $class . '"><a class="page-link" href="?page=' . ( $this->_page + 1 ) . '">NEXT</a></li>';

        $html       .= '</ul>';

        return $html;
    }

}