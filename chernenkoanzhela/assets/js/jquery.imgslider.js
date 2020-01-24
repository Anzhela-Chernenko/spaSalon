

;( function( $, window, undefined ) {
	
	'use strict';


	let BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';


	$.fn.imagesLoaded = function( callback ) {
		let $this = this,
			deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
			hasNotify = $.isFunction(deferred.notify),
			$images = $this.find('img').add( $this.filter('img') ),
			loaded = [],
			proper = [],
			broken = [];

		function doneLoading() {
			let $proper = $(proper),
				$broken = $(broken);

			if ( deferred ) {
				if ( broken.length ) {
					deferred.reject( $images, $proper, $broken );
				} else {
					deferred.resolve( $images );
				}
			}

			if ( $.isFunction( callback ) ) {
				callback.call( $this, $images, $proper, $broken );
			}
		}

		function imgLoaded( img, isBroken ) {

			if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
				return;
			}


			loaded.push( img );


			if ( isBroken ) {
				broken.push( img );
			} else {
				proper.push( img );
			}


			$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );


			if ( hasNotify ) {
				deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
			}


			if ( $images.length === loaded.length ){
				setTimeout( doneLoading );
				$images.unbind( '.imagesLoaded' );
			}
		}


		if ( !$images.length ) {
			doneLoading();
		} else {
			$images.bind( 'load.imagesLoaded error.imagesLoaded', function( event ){

				imgLoaded( event.target, event.type === 'error' );
			}).each( function( i, el ) {
				let src = el.src;


				let cached = $.data( el, 'imagesLoaded' );
				if ( cached && cached.src === src ) {
					imgLoaded( el, cached.isBroken );
					return;
				}


				if ( el.complete && el.naturalWidth !== undefined ) {
					imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
					return;
				}


				if ( el.readyState || el.complete ) {
					el.src = BLANK;
					el.src = src;
				}
			});
		}

		return deferred ? deferred.promise( $this ) : $this;
	};


	let $event = $.event,
	$special,
	resizeTimeout;

	$special = $event.special.debouncedresize = {
		setup: function() {
			$( this ).on( "resize", $special.handler );
		},
		teardown: function() {
			$( this ).off( "resize", $special.handler );
		},
		handler: function( event, execAsap ) {

			var context = this,
				args = arguments,
				dispatch = function() {

					event.type = "debouncedresize";
					$event.dispatch.apply( context, args );
				};

			if ( resizeTimeout ) {
				clearTimeout( resizeTimeout );
			}

			execAsap ?
				dispatch() :
				resizeTimeout = setTimeout( dispatch, $special.threshold );
		},
		threshold: 50
	};


	let $window				= $( window ),
		Modernizr			= window.Modernizr;

	$.ImgSlider				= function( options, element ) {
		
		let _self = this;

		this.$el = $( element ).hide();
		

		this.$el.imagesLoaded( function() {

			_self.$el.show();
			_self._init( options );

		} );
		
	};

	$.ImgSlider.defaults	= {
		autoplay	: false,
		interval	: 4000
	};

	$.ImgSlider.prototype	= {

		_init				: function( options ) {
			

			this.options		= $.extend( true, {}, $.ImgSlider.defaults, options );

			this.current			= 0;
			

			let transEndEventNames	= {
				'WebkitTransition'	: 'webkitTransitionEnd',
				'MozTransition'		: 'transitionend',
				'OTransition'		: 'oTransitionEnd',
				'msTransition'		: 'MSTransitionEnd',
				'transition'		: 'transitionend'
			};
			this.transEndEventName	= transEndEventNames[ Modernizr.prefixed('transition') ];


			this.$initElems		= this.$el.children( 'figure' );

			this.initElemsCount	= this.$initElems.length;
			
			if( this.initElemsCount < 3 ) {

				return false;

			}


			this._layout();

			this._initEvents();


			if( this.options.autoplay ) {
			
				this._startSlideshow();
			
			}

		},
		_layout				: function() {

			this.$initElems.wrapAll( '<div class="fs-temp"></div>' ).hide();

			this.$initElems
				.filter( ':lt(3)' )
				.clone()
				.show()
				.prependTo( this.$el )
				.wrap( '<div class="fs-block"></div>' );

			this.$el
				.wrap( '<section class="fs-container"></section>' )
				.wrap( '<div class="fs-wrapper"></div>' );

			this.$blocks	= this.$el.children( 'div.fs-block' );
			

			this.$blockL	= this.$blocks.eq( 0 );
			this.$blockC	= this.$blocks.eq( 1 );
			this.$blockR	= this.$blocks.eq( 2 );

			this.$blockC.find( 'figcaption' ).addClass( 'fs-transition' );


			this.$temp		= this.$el.find( 'div.fs-temp' );


			this._resizeBlocks();


			if( this.initElemsCount > 3 ) {

				let $nav = $( '<nav class="fs-navigation"><span>Previous</span><span>Next</span></nav>' ).appendTo( this.$el.parent() );


				this.$navPrev	= $nav.find( 'span:first' );
				this.$navNext	= $nav.find( 'span:last' );

				this._initNavigationEvents();

			}

		},

        _getImageDim			: function( src, limits ) {

        	let img		= new Image();

			img.src		= src;

			let l_w		= limits.width,
				l_h		= limits.height,
				r_w		= l_h / l_w,
				i_w		= img.width,
				i_h		= img.height,
				r_i		= i_h / i_w,
				new_w, new_h, new_left, new_top;

			if( r_w > r_i ) {

				new_h	= l_h;
				new_w	= l_h / r_i;

			}
			else {

				new_h	= l_w * r_i;
				new_w	= l_w;

			}

			return {
				width	: new_w,
				height	: new_h,
				left	: ( l_w - new_w ) / 2,
				top		: ( l_h - new_h ) / 2
			};

		},
		_initNavigationEvents	: function() {

			let _self = this;

			this.$navPrev.on( 'click.imgslider', function() {

				if( _self.options.autoplay ) {
				
					clearTimeout( _self.slideshow );
					_self.options.autoplay	= false;
				
				}

				_self._navigate( 'left' );

			} );
			this.$navNext.on( 'click.imgslider', function() {

				if( _self.options.autoplay ) {
				
					clearTimeout( _self.slideshow );
					_self.options.autoplay	= false;
				
				}
				
				_self._navigate( 'right' );

			} );

		},
		_initEvents				: function() {

			let _self = this;

			$window.on( 'debouncedresize.imgslider', function() {

				_self._resizeBlocks();

			} );

		},

		_resizeBlocks			: function() {

			let _self = this;

			this.$blocks.each( function( i ) {

				let $el 	= $( this ).children( 'figure' ),
					$img	= $el.children( 'img' ),
					dim		= _self._getImageDim( $img.attr( 'src' ), { width : $el.width(), height : $el.height() } );


				switch( i ) {
					case 0 : _self.$blockL.data( 'imgstyle', dim ); break;
					case 1 : _self.$blockC.data( 'imgstyle', dim ); break;
					case 2 : _self.$blockR.data( 'imgstyle', dim ); break;
				};


				$img.css( dim );

			} );

		},
		_navigate				: function( dir ) {

			if( this.isAnimating === true ) {

				return false;

			}

			this.isAnimating = true;

			let _self	= this,
				$items	= this.$temp.children(),
				LIndex, CIndex, RIndex;
			
			this.$blocks.find( 'figcaption' ).hide().css( 'transition', 'none' ).removeClass( 'fs-transition' );

			if( dir === 'right' ) {

				LIndex = this.current + 1;
				CIndex = this.current + 2;
				RIndex = this.current + 3;
				
				if( LIndex >= this.initElemsCount ) {

					LIndex -= this.initElemsCount

				}

				if( CIndex >= this.initElemsCount ) {

					CIndex -= this.initElemsCount

				}

			}
			else if( dir === 'left' ) {

				LIndex = this.current - 1;
				CIndex = this.current;
				RIndex = this.current + 1;
				
				if( LIndex < 0 ) {

					LIndex = this.initElemsCount - 1

				}

			}
				
				if( RIndex >= this.initElemsCount ) {

				RIndex -= this.initElemsCount

			}

			let $elL	= $items.eq( LIndex ).clone().show(),
				$elC	= $items.eq( CIndex ).clone().show(),
				$elR	= $items.eq( RIndex ).clone().show();


			$elL.children( 'img' ).css( this.$blockL.data( 'imgstyle' ) );
			$elC.children( 'img' ).css( this.$blockC.data( 'imgstyle' ) );
			$elR.children( 'img' ).css( this.$blockR.data( 'imgstyle' ) );
			
			this.$blockL.append( $elL );
			this.$blockC.append( $elC );
			this.$blockR.append( $elR );



			let $slides = this.$blocks.find( 'figure:first' ).css( 'width', '0%');
			
			if( Modernizr.csstransitions ) {

				$slides.on( this.transEndEventName, function( event ) {

					let $this 		= $( this ),
						blockIdx	= $this.parent().index('');
					
					_self._slideEnd( dir, blockIdx, $elC );

					$this.off( _self.transEndEventName ).remove();

				} );

			}
			else {

				$slides.each( function() {

				let $this 		= $( this ),
					blockIdx	= $this.parent().index('');

					_self._slideEnd( dir, blockIdx, $elC );

				} );

				this._slideEnd();

			}

		},
		_slideEnd				: function( dir, blockIdx, $main ) {

				if( blockIdx === 0 ) {

				if( this.current === this.initElemsCount - 1 && dir === 'right' ) {

					this.current = 0;

					}
				else if( this.current === 0 && dir === 'left' ) {

					this.current = this.initElemsCount - 1;

					}
					else {
						
					( dir === 'right' ) ? ++this.current : --this.current;
					
					}

				this.isAnimating = false;

				}
				else if( blockIdx === 1 ) {

				$main.find( 'figcaption' ).addClass( 'fs-transition' );

				}

		},

		_startSlideshow			: function() {
		
			let _self	= this;
			
			this.slideshow	= setTimeout( function() {
				
				_self._navigate( 'right' );
				
				if( _self.options.autoplay ) {
				
					_self._startSlideshow();
				
		}
			
			}, this.options.interval );
		
		},

	};
	
	let logError		= function( message ) {

		if ( window.console ) {

			window.console.error( message );
		
		}

	};
	
	$.fn.imgslider		= function( options ) {
		
		if ( typeof options === 'string' ) {
			
			let args = Array.prototype.slice.call( arguments, 1 );
			
			this.each(function() {
			
				var instance = $.data( this, 'imgslider' );
				
				if ( !instance ) {

					logError( "cannot call methods on imgslider prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				
				}
				
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

					logError( "no such method '" + options + "' for imgslider instance" );
					return;
				
				}
				
				instance[ options ].apply( instance, args );
			
			});
		
		} 
		else {
		
			this.each(function() {
				
				let instance = $.data( this, 'imgslider' );
				
				if ( instance ) {

					instance._init();
				
				}
				else {

					$.data( this, 'imgslider', new $.ImgSlider( options, this ) );
				
				}

			});
		
		}
		
		return this;
		
	};
	
} )( jQuery, window );