(function ($) {
  $doc = $(document);

  $doc.ready(function () {
    /**
     * Retrieve posts
     */
    function get_posts($params) {
      $container = $(".blog-filter");
      $content = $(".blog-posts");
      $status = $(".blog-filter-status");
      $status.html('<div class="text-center w-100"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Cargando artículos...</span></div></div>');

      $.ajax({
        url: bobz.ajax_url,
        data: {
          action: "do_filter_posts",
          nonce: bobz.nonce,
          params: $params,
        },
        type: "post",
        dataType: "json",
        success: function (data, textStatus, XMLHttpRequest) {
          if (data.status === 200) {
            $content.html(data.content);
          } else if (data.status === 201) {
            $content.html(data.message);
          } else {
            $status.html(data.message);
          }
        },
        error: function (MLHttpRequest, textStatus, errorThrown) {
          $status.html(textStatus);

          /*console.log(MLHttpRequest);
					console.log(textStatus);
					console.log(errorThrown);*/
        },
        complete: function (data, textStatus) {
          msg = textStatus;

          if (textStatus === "success") {
            msg = data.responseJSON.found;
          }

          $status.html('<span>'+msg + ' artículos'+'</span>');

          /*console.log(data);
	            	console.log(textStatus);*/
        },
      });
    }

    /**
     * Bind get_posts to tag cloud and navigation
     */
     $(".blog-filter").on(
      "click",
      "a[data-filter], .blog-pagination a",
      function (event) {
        if (event.preventDefault) {
          event.preventDefault();
        }

        $this = $(this);

        /**
         * Set filter active
         */
        if ($this.data("filter")) {
          $this.closest("ul").find(".active").removeClass("active");
          $this.addClass("active");
          $page = $this.data("page");
        } else {
          /**
           * Pagination
           */
          $page = parseInt($this.attr("href").replace(/\D/g, ""));
          $this = $(".blog-filter .active");
        }

        $params = {
          page: $page,
          tax: $this.data("filter"),
          term: $this.data("term"),
          qty: $this.closest(".blog-filter").data("paged"),
        };
        // console.log($params);

        // Run query
        get_posts($params);
      }
    );

    $('a[data-term="all-terms"]').trigger("click");
  });
})(jQuery);
