<?php

namespace vendor;

class Pagination
{

    public int $count_pages = 1;
    public int $current_page = 1;
    public string $uri = "";
    public int $mid_size = 2;
    public int $all_pages = 10;

    public function __construct(
        public int $page = 1,
        public int $per_page = 1,
        public int $total = 1,
    ) {
        $this->count_pages = $this->getCountPages();
        $this->current_page = $this->getCurrentPage();
        $this->uri = $this->getParams();
        $this->mid_size = $this->getMidSize();
    }

    public function getCountPages()
    {
        return ceil($this->total / $this->per_page) ?: 1;
    }

    public function getCurrentPage()
    {
        if ($this->page < 1) {
            $this->page = 1;
        }

        if ($this->page > $this->count_pages) {
            $this->page = $this->count_pages;
        }

        return $this->page;
    }

    public function getStart()
    {
        return ($this->page - 1) * $this->per_page;
    }

    public function getParams()
    {
        $url = $_SERVER["REQUEST_URI"];
        $url = explode("?", $url);
        $uri = $url[0];

        if (isset($url[1]) && $url[1] !== "") {

            $uri .= "?";
            $params = explode("&", $url[1]);

            foreach ($params as $param) {
                if (!str_contains($param, 'page=')) {
                    $uri .= "{$param}&";
                }
            }
        }

        return $uri;
    }

    public function getHtml()
    {

        $back = "";
        $next = "";
        $start_page = "";
        $end_page = "";
        $pages_left = "";
        $pages_right = "";

        // Отображение стрелки перехода назад
        if ($this->current_page > 1) {
            $back = "<li class='page-item'><a class='page-link' href='" . $this->getLink($this->current_page - 1) . "'>&lt;</a></li>";
        }

        // Отображение стрелки перехода вперед
        if ($this->current_page < $this->count_pages) {
            $next = "<li class='page-item'><a class='page-link' href='" . $this->getLink($this->current_page + 1) . "'>&gt;</a></li>";
        }

        // Отображение стрелки перехода на 1 страницу
        if ($this->current_page > $this->mid_size + 1) {
            $start_page = "<li class='page-item'><a class='page-link' href='" . $this->getLink(1) . "'>&laquo;</a></li>";
        }

        // Отображение стрелки перехода на последнюю страницу
        if ($this->current_page < $this->count_pages - $this->mid_size) {
            $end_page = "<li class='page-item'><a class='page-link' href='" . $this->getLink($this->count_pages) . "'>&raquo;</a></li> ";
        }

        // Отображение перехода на страницы слева
        for ($i = $this->mid_size; $i > 0; $i--) {
            if ($this->current_page - $i > 0) {
                $pages_left .= "<li class='page-item'><a class='page-link' href='" . $this->getLink($this->current_page - $i) . "'>" . $this->current_page - $i . "</a></li>";
            }
        }

        // Отображение перехода на страницы справа
        for ($i = 1; $i <= $this->mid_size; $i++) {
            if ($this->current_page + $i <= $this->count_pages) {
                $pages_right .= "<li class='page-item'><a class='page-link' href='" . $this->getLink($this->current_page + $i) . "'>" . $this->current_page + $i . "</a></li>";
            }
        }

        // Возвращаем отображение пагинации
        return '<nav aria-label="Page navigation example"><ul class="pagination">' . $start_page . $back . $pages_left .
            "<li class='page-item active' aria-current='page'><a class='page-link' href='{$this->getLink($this->current_page)}'>" . $this->current_page . '</a></li>'
            . $pages_right . $next . $end_page . '</ul></nav>';
    }

    private function getLink($page) {

        if ($page === 1) {
            return rtrim($this->uri, "?&");
        }

        if ((str_contains($this->uri, "&")) || (str_contains($this->uri, "?"))) {
            return "{$this->uri}page={$page}";
        } else {
            return "{$this->uri}?page={$page}";
        }

    }

    private function getMidSize(): int {

        if ($this->count_pages <= $this->all_pages) {
            return $this->count_pages;
        } else {
            return $this->mid_size;
        }

    }
}
