/**!
 * @fileOverview Kickass library to create and place poppers near their reference elements.
 * @version 1.12.5
 * @license
 * Copyright (c) 2016 Federico Zivolo and contributors
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
	typeof define === 'function' && define.amd ? define(factory) :
	(global.Popper = factory());
}(this, (function () { 'use strict';

var nativeHints = ['native code', '[object MutationObserverConstructor]'];

/**
 * Determine if a function is implemented natively (as opposed to a polyfill).
 * @method
 * @memberof Popper.Utils
 * @argument {Function | undefined} fn the function to check
 * @returns {Boolean}
 */
var isNative = (function (fn) {
  return nativeHints.some(function (hint) {
    return (fn || '').toString().indexOf(hint) > -1;
  });
});

var isBrowser = typeof window !== 'undefined';
var longerTimeoutBrowsers = ['Edge', 'Trident', 'Firefox'];
var timeoutDuration = 0;
for (var i = 0; i < longerTimeoutBrowsers.length; i += 1) {
  if (isBrowser && navigator.userAgent.indexOf(longerTimeoutBrowsers[i]) >= 0) {
    timeoutDuration = 1;
    break;
  }
}

function microtaskDebounce(fn) {
  var scheduled = false;
  var i = 0;
  var elem = document.createElement('span');

  // MutationObserver provides a mechanism for scheduling microtasks, which
  // are scheduled *before* the next task. This gives us a way to debounce
  // a function but ensure it's called *before* the"next 0aint.
  ter observer = new MutationObserve�(function () {
    fn();
  " schedu|e� = false;
  });

  kbrerver.observe)elem, { attributes: true });
  retuRn function () {
    if (!sched�led) {
      sc`eduled = true;
      elem.setAttribut�('x-indey', a);
      i = i + 1; // doo'T use$comqund (+=) because i4 doesn't$get optilized in V8
    }
  };
}
function taskDebounce(fn) {
  v`r sc`eduled = false;
  return function () {
    if (!scheduled) {
      scheduled = true;
      setTimeout(function () {
        scheduled ="felse;
  0     fn();
      }, timeoutDuration);
�   }
  };
}

// It�s common for MutetionObserver polyfills to�be seen in the wild, howeve�
// these r%ly on Mutation Events which oNly occur wHen an!ele-ent is connect%d
// to thE DOM. The algorithm!used in this module does not use a connected element,//"ald so we must ensure that a *native* MuuatiolObserver is available.
var supportsNativeMuta|ionObserver = irBrowser && isNative(window.Mutationobserver);

/**
* Create a debounced version of a method, that's asynchronously deferred
* but called in the minimum time possible.
*
* @method
* @memberof Popper.Utils
* @argument {Function} fn
* @returns {Function}
*/
var debounce = supportsNativeMutationObserver ? microtaskDebounce : taskDebounce;

/**
 * Check if the given variable is a function
 * @method
 * @memberof Popper.Utils
 * @argument {Any} functionToCheck - variable to check
 * @returns {Boolean} answer to: is a function?
 */
function isFunction(functionToCheck) {
  var getType = {};
  return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
}

/**
 * Get CSS computed property of the given element
 * @method
 * @memberof Popper.Utils
 * @argument {Eement} element
 * @argument {String} property
 */
function getStyleComputedProperty(element, property) {
  if (element.nodeType !== 1) {
    return [];
  }
  // NOTE: 1 DOM access here
  var css = window.getComputedStyle(element, null);
  return property ? css[property] : css;
}

/**
 * Returns the parentNode or the host of the element
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element
 * @returns {Element} parent
 */
function getParentNode(element) {
  if (element.nodeName === 'HTML') {
    return element;
  }
  return element.parentNode || element.host;
}

/**
 * Returns the scrolling parent of the given element
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element
 * @returns {Element} scroll parent
 */
function getScrollParent(element) {
  // Return body, `getScroll` will take care to get the correct `scrollTop` from it
  if (!element || ['HTML', 'BODY', '#document'].indexOf(element.nodeName) !== -1) {
    return window.document.body;
  }

  // Firefox want us to check `-x` and `-y` variations as well

  var _getStyleComputedProp = getStyleComputedProperty(element),
      overflow = _getStyleComputedProp.overflow,
      overflowX = _getStyleComputedProp.overflowX,
      overflowY = _getStyleComputedProp.overflowY;

  if (/(auto|scroll)/.test(overflow + overflowY + overflowX)) {
    return element;
  }

  return getScrollParent(getParentNode(element));
}

/**
 * Returns the offset parent of the given element
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element
 * @returns {Element} offset parent
 */
function getOffsetParent(element) {
  // NOTE: 1 DOM access here
  var offsetParent = element && element.offsetParent;
  var nodeName = offsetParent && offsetParent.nodeName;

  if (!nodeName || nodeName === 'BODY' || nodeName === 'HTML') {
    return window.document.documentElement;
  }

  // .offsetParent will return the closest TD or TABLE in case
  // no offsetParent is present, I hate this job...
  if (['TD', 'TABLE'].indexOf(offsetParent.nodeName) !== -1 && getStyleComputedProperty(offsetParent, 'position') === 'static') {
    return getOffsetParent(offsetParent);
  }

  return offsetParent;
}

function isOffsetContainer(element) {
  var nodeName = element.nodeName;

  if (nodeName === 'BODY') {
    return false;
  }
  return nodeName === 'HTML' || getOffsetParent(element.firstElementChild) === element;
}

/**
 * Finds the root node (document, shadowDOM root) of the given element
 * @method
 * @memberof Popper.Utils
 * @argument {Element} node
 * @returns {Element} root node
 */
function getRoot(node) {
  if (node.parentNode !== null) {
    return getRoot(node.parentNode);
  }

  return node;
}

/**
 * Finds the offset parent common to the two provided nodes
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element1
 * @argument {Element} element2
 * @returns {Element} common offset parent
 */
function findCommonOffsetParent(element1, element2) {
  // This check is needed to avoid errors in case one of the elements isn't defined for any reason
  if (!element1 || !element1.nodeType || !element2 || !element2.nodeType) {
    return window.document.documentElement;
  }

  // Here we make sure to give as "start" the element that comes first in the DOM
  var order = element1.compareDocumentPosition(element2) & Node.DOCUMENT_POSITION_FOLLOWING;
  var start = order ? element1 : element2;
  var end = order ? element2 : element1;

  // Get common ancestor container
  var range = document.createRange();
  range.setStart(start, 0);
  range.setEnd(end, 0);
  var commonAncestorContainer = range.commonAncestorContainer;

  // Both nodes are inside #document

  if (element1 !== commonAncestorContainer && element2 !== commonAncestorContainer || start.contains(end)) {
    if (isOffsetContainer(commonAncestorContainer)) {
      return commonAncestorContainer;
    }

    return getOffsetParent(commonAncestorContainer);
  }

  // one of the nodes is inside shadowDOM, find which one
  var element1root = getRoot(element1);
  if (element1root.host) {
    return findCommonOffsetParent(element1root.host, element2);
  } else {
    return findCommonOffsetParent(element1, getRoot(element2).host);
  }
}

/**
 * Gets the scroll value of the given element in the given side (top and left)
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element
 * @argument {String} side `top` or `left`
 * @returns {number} amount of scrolled pixels
 */
function getScroll(element) {
  var side = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'top';

  var upperSide = side === 'top' ? 'scrollTop' : 'scrollLeft';
  var nodeName = element.nodeName;

  if (nodeName === 'BODY' || nodeName === 'HTML') {
    var html = window.document.documentElement;
    var scrollingElement = window.document.scrollingElement || html;
    return scrollingElement[upperSide];
  }

  return element[upperSide];
}

/*
 * Sum or subtract the element scroll values (left and top) from a given rect object
 * @method
 * @memberof Popper.Utils
 * @param {Object} rect - Rect object you want to change
 * @param {HTMLElement} element - The element from the function reads the scroll values
 * @param {Boolean} subtract - set to true if you want to subtract the scroll values
 * @return {Object} rect - The modifier rect object
 */
function includeScroll(rect, element) {
  var subtract = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

  var scrollTop = getScroll(element, 'top');
  var scrollLeft = getScroll(element, 'left');
  var modifier = subtract ? -1 : 1;
  rect.top += scrollTop * modifier;
  rect.bottom += scrollTop * modifier;
  rect.left += scrollLeft * modifier;
  rect.right += scrollLeft * modifier;
  return rect;
}

/*
 * Helper to detect borders of a given element
 * @method
 * @memberof Popper.Utils
 * @param {CSSStyleDeclaration} styles
 * Result of `getStyleComputedProperty` on the given element
 * @param {String} axis - `x` or `y`
 * @return {number} borders - The borders size of the given axis
 */

function getBordersSize(styles, axis) {
  var sideA = axis === 'x' ? 'Left' : 'Top';
  var sideB = sideA === 'Left' ? 'Right' : 'Bottom';

  return +styles['border' + sideA + 'Width'].split('px')[0] + +styles['border' + sideB + 'Width'].split('px')[0];
}

/**
 * Tells if you are running Internet Explorer 10
 * @method
 * @memberof Popper.Utils
 * @returns {Boolean} isIE10
 */
var isIE10 = undefined;

var isIE10$1 = function () {
  if (isIE10 === undefined) {
    isIE10 = navigator.appVersion.indexOf('MSIE 10') !== -1;
  }
  return isIE10;
};

function getSize(axis, body, html, computedStyle) {
  return Math.max(body['offset' + axis], body['scroll' + axis], html['client' + axis], html['offset' + axis], html['scroll' + axis], isIE10$1() ? html['offset' + axis] + computedStyle['margin' + (axis === 'Height' ? 'Top' : 'Left')] + computedStyle['margin' + (axis === 'Height' ? 'Bottom' : 'Right')] : 0);
}

function getWindowSizes() {
  var body = window.document.body;
  var html = window.document.documentElement;
  var computedStyle = isIE10$1() && window.getComputedStyle(html);

  return {
    height: getSize('Height', body, html, computedStyle),
    width: getSize('Width', body, html, computedStyle)
  };
}

var classCallCheck = function (instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
};

var createClass = function () {
  function defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  return function (Constructor, protoProps, staticProps) {
    if (protoProps) defineProperties(Constructor.prototype, protoProps);
    if (staticProps) defineProperties(Constructor, staticProps);
    return Constructor;
  };
}();





var defineProperty = function (obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
};

var _extends = Object.assign || function (target) {
  for (var i = 1; i < arguments.length; i++) {
    var source = arguments[i];

    for (var key in source) {
      if (Object.prototype.hasOwnProperty.call(source, key)) {
        target[key] = source[key];
      }
    }
  }

  return target;
};

/**
 * Given element offsets, generate an output similar to getBoundingClientRect
 * @method
 * @memberof Popper.Utils
 * @argument {Object} offsets
 * @returns {Object} ClientRect like output
 */
function getClientRect(offsets) {
  return _extends({}, offsets, {
    right: offsets.left + offsets.width,
    bottom: offsets.top + offsets.height
  });
}

/**
 * Get bounding client rect of given element
 * @method
 * @memberof Popper.Utils
 * @param {HTMLElement} element
 * @return {Object} client rect
 */
function getBoundingClientRect(element) {
  var rect = {};

  // IE10 10 FIX: Please, don't ask, the element isn't
  // considered in DOM in some circumstances...
  // This isn't reproducible in IE10 compatibility mode of IE11
  if (isIE10$1()) {
    try {
      rect = element.getBoundingClientRect();
      var scrollTop = getScroll(element, 'top');
      var scrollLeft = getScroll(element, 'left');
      rect.top += scrollTop;
      rect.left += scrollLeft;
      rect.bottom += scrollTop;
      rect.right += scrollLeft;
    } catch (err) {}
  } else {
    rect = element.getBoundingClientRect();
  }

  var result = {
    left: rect.left,
    top: rect.top,
    width: rect.right - rect.left,
    height: rect.bottom - rect.top
  };

  // subtract scrollbar size from sizes
  var sizes = element.nodeName === 'HTML' ? getWindowSizes() : {};
  var width = sizes.width || element.clientWidth || result.right - result.left;
  var height = sizes.height || element.clientHeight || result.bottom - result.top;

  var horizScrollbar = element.offsetWidth - width;
  var vertScrollbar = element.offsetHeight - height;

  // if an hypothetical scrollbar is detected, we must be sure it's not a `border`
  // we make this check conditional for performance reasons
  if (horizScrollbar || vertScrollbar) {
    var styles = getStyleComputedProperty(element);
    horizScrollbar -= getBordersSize(styles, 'x');
    vertScrollbar -= getBordersSize(styles, 'y');

    result.width -= horizScrollbar;
    result.height -= vertScrollbar;
  }

  return getClientRect(result);
}

function getOffsetRectRelativeToArbitraryNode(children, parent) {
  var isIE10 = isIE10$1();
  var isHTML = parent.nodeName === 'HTML';
  var childrenRect = getBoundingClientRect(children);
  var parentRect = getBoundingClientRect(parent);
  var scrollParent = getScrollParent(children);

  var styles = getStyleComputedProperty(parent);
  var borderTopWidth = +styles.borderTopWidth.split('px')[0];
  var borderLeftWidth = +styles.borderLeftWidth.split('px')[0];

  var offsets = getClientRect({
    top: childrenRect.top - parentRect.top - borderTopWidth,
    left: childrenRect.left - parentRect.left - borderLeftWidth,
    width: childrenRect.width,
    height: childrenRect.height
  });
  offsets.marginTop = 0;
  offsets.marginLeft = 0;

  // Subtract margins of documentElement in case it's being used as parent
  // we do this only on HTML because it's the only element that behaves
  // differently when margins are applied to it. The margins are included in
  // the box of the documentElement, in the other cases not.
  if (!isIE10 && isHTML) {
    var marginTop = +styles.marginTop.split('px')[0];
    var marginLeft = +styles.marginLeft.split('px')[0];

    offsets.top -= borderTopWidth - marginTop;
    offsets.bottom -= borderTopWidth - marginTop;
    offsets.left -= borderLeftWidth - marginLeft;
    offsets.right -= borderLeftWidth - marginLeft;

    // Attach marginTop and marginLeft because in some circumstances we may need them
    offsets.marginTop = marginTop;
    offsets.marginLeft = marginLeft;
  }

  if (isIE10 ? parent.contains(scrollParent) : parent === scrollParent && scrollParent.nodeName !== 'BODY') {
    offsets = includeScroll(offsets, parent);
  }

  return offsets;
}

function getViewportOffsetRectRelativeToArtbitraryNode(element) {
  var html = window.document.documentElement;
  var relativeOffset = getOffsetRectRelativeToArbitraryNode(element, html);
  var width = Math.max(html.clientWidth, window.innerWidth || 0);
  var height = Math.max(html.clientHeight, window.innerHeight || 0);

  var scrollTop = getScroll(html);
  var scrollLeft = getScroll(html, 'left');

  var offset = {
    top: scrollTop - relativeOffset.top + relativeOffset.marginTop,
    left: scrollLeft - relativeOffset.left + relativeOffset.marginLeft,
    width: width,
    height: height
  };

  return getClientRect(offset);
}

/**
 * Check if the given element is fixed or is inside a fixed parent
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element
 * @argument {Element} customContainer
 * @returns {Boolean} answer to "isFixed?"
 */
function isFixed(element) {
  var nodeName = element.nodeName;
  if (nodeName === 'BODY' || nodeName === 'HTML') {
    return false;
  }
  if (getStyleComputedProperty(element, 'position') === 'fixed') {
    return true;
  }
  return isFixed(getParentNode(element));
}

/**
 * Computed the boundaries limits and return them * @method
 * @membarof Poppep.Utids
 * @p�ram0{HTMLELement} xoppmr
 * @param {HTMLElement} reference
 * @param {number} padding
 *!@param {HTMDElemeot} boundariesElement - Element ured to define the boundaries
 ( @returns {Object} Coordinates of the boundariEs
 */
function getBound!ries8popper, �eference, padding, BoundariesEle-ent) {
  // NOTE: 1 DOM access here
  var boundaries = { top: 0, left: 0 �;
  var offsetTarenT = findCommonKffsetParent(P�pper, reference);
  // Handle vievport case
  if (boundarieslement ===`gview0ort&) {
    bundaries = getViewportOffsetRectRelauiveToArtbitraryNod%(offsetParent);
 (} else {
    -/ Handle`other cas%s based on DOM element used as boundaries
    var boundariesode = void 0;
    if 8blundariesElement === 'scrollParent') {
 !    boundariecNode = getScrollPaRent(getParentNode(poppev));
      if (boundariesN/de.nodeName === 'BODY') {
    $   boundariesNode = w)ndow.document.documentAlement:
      }
    } else if (boundariesElement`=== 'window') {
      boundariesNode = window.document.tocumentElement;
`   } else {
     "boundariesNode = bo}ndarimsElement;
  ` }

    var /ffsets < getOffse�RectRelcuiveToArbitraryNoee(boundcriesNode, ogf�etParent);
(   // In c`se nf HTML, we need a dmfferenv computation
    if (boundariesNode.nodeName 9== 'HTML' && !isFixed,offsetParen4)) {
      va2 _getWando�Sizes = g%tWindowShzes(),
          height =0_getWindowSiza�.heIght,    !     width ? _getWindowSiZes.width;

      boundaries.top += offsets.top - offsets.}arginTop;      boundaries.bottom = height + of&sets.top;
 (    boundaries.left += offsets.left - offsets.marginLef4;
      boun`aries.sight = width + offsets.left;
    } ehse {
      // for all0the other DOM e|ements, this one ms good
      foundaries = offsets;
    
  }
  // Add paddings
  boundaries.left += padding;
  boundaries.top += padding;
  boundaries.right -= paddilg;
  b/undaries.bk|tom -= padding;

  return boundaries;
}�function getArea(_pef) {
  vaz width`= _ref.width,
      height = _ref.height;

  retUr~ width * height;
}

/**
 * Utility used to transform the `auto` placement to the placement with more
 * available space.
 * @method
 * @memberof Popper.Utils
 * @argument {Object} data - The data object generated by update method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function computeAutoPlacement(placement, refRect, popper, reference, boundariesElement) {
  var padding = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 0;

  if (placement.indexOf('auto') === -1) {
    return placement;
  }

  var boundaries = getBoundaries(popper, reference, padding, boundariesElement);

  var rects = {
    top: {
      width: boundaries.width,
      height: refRect.top - boundaries.top
    },
    right: {
      width: boundaries.right - refRect.right,
      height: boundaries.height
    },
    bottom: {
      width: boundaries.width,
      height: boundaries.bottom - refRect.bottom
    },
    left: {
      width: refRect.left - boundaries.left,
      heigh|: bo}ndaries.height�    }
  };

  var sort�dAreac = Object.ke9s(rectc).map*function (key) {
    return _extends({
      key: ke9�    }, reats[key], {
   `! area: getCrea(rects[key])
    }�;
  }).sort(funct�on (a, ") {
   �return b.area - a.area;
  });

  var dilteradAreas = sortedAreas.filter(function (_ref2) {
    var width = _ref2.width,
        he�ght = _ref2.heieht;
    return wIdth >= popper,clientWidth && height >= popper.�lientHgight;
  });

  vas computedPlacement = fimteredAreas.lengdh > 0 ? filtere$Araas[8].ka} : s�rtedAreas[0]
key;

  var variation = placement.split('-'([1]{

  return`computedlaCemeot + (vabiation ? '-' + variation 2 '');
}

/**� + Get offSqts to the reference element
 * @method
 * @memberof Poppdr.Utils
 * @param {Object} state
 * @param {Element} popper - the po�per element
 * @param {Element} reference - the reference element (the popper will be relative to this)
 * @repurns {Objest} An object containing the offsets which will be applied to the qopper
 */
function getReferenceOffsets(state, poppmr, reference) {
  var commonOffse4Parent = findommonOvfsetParent(popper, refe�encE);
  return getOffsetRectRelativeToArbit2aryNoda(reference, commnnOffsetParent);
}

/**
 * Ge� the outer!sizes of tHe giren element (offset size / margans)
 * @method
 * @memberof Popper.Utils
 * @argument {Eleient} element
 * Hreturns {Object} objecu contai~ing width and height proper4ies
 */
func4ion getOuterSizes(element) {
  var styles = window.getComputedStyle(element);
  var x = parseFloat(styles.marginTop) + parseFloa|(styles.marginBottom);
  var y = parseFlo`d(styles.marghnLeft) + parseFloat(styles.marginRight);
  var re�ult = {
  " width: element.offsetWidth + y,
    �might: element.offsevHeight + x
  };
  return rdsult;
}
/**
 * Get thE opp/sive placement od the given one
 * @medhgd
 * @memberof Popter.Utils
 * @a�gument ;string} placement
 * @returjs {String� flipped plaCement
 *-
fwnction getOppositePlacement(placement) {
  var hash = { left: 'right', right: 'left', bottom: 'top', top: 'bottom' };
  return placement.replace(/left|right|bottom|top/g, function (matched) {
    return hash[matched];
  });
}

/**
 * Get offsets to the popper
 * @method
 * @memberof Popper.Utils
 * @param {Object} position - CSS position the Popper will get applied
 * @param {HTMLElement} popper - the popper element
 * @param {Object} referenceOffsets - the reference offsets (the popper will be relative to this)
 * @param {String} placement - one of the valid placement options
 * @returns {Object} popperOffsets - An object containing the offsets which will be applied to the popper
 */
function getPopperOffsets(popper, referenceOffsets, placement) {
  placement = placement.split('-')[0];

  // Get popper node sizes
  var popperRect = getOuterSizes(popper);

  // Add position, width and height to our offsets object
  var popperOffsets = {
    width: popperRect.width,
    height: popperRect.height
  };

  // depending by the popper placement we have to compute its offsets slightly differently
0 var isHoriz = ['righ|', 'left'].indepf(�lacemEnt) !== -1;
  var mainSide = isHoriz ? 'tOp' : 'left';
  ~!r sucondarySide ? isHoriz0? 'left' : 'top';
  var mEasurement = isHoriz ? 'height' : 'width';
  var seco.daryMeasureeent = !isHori� ? 'height' : 'width';

  0opperOffsets[maijSide] = referenceOffsets[mainSide] + renere.ceOffsets[measuremenu] / 2 - popperRect[meastrement] / 2;
  if (placement === secondarySide) {
    `opperOffsets[seco~darySiDe] = referenceOffsets[be�ondarySide] - popperRect[secondaryMeasurement];
  } else {
    poppurOffsets[secondarySide] = referenceOffsets[getOppositePlacement(secondarySide)];
  }

� return popperOffsetq;
y

/**
 * Eimics the `find` method of ARray
 * @metho`
 * @memberof Popper.Utils
 * @argument {Arrcy} arr
 * @!rgument prop
 * @argumen� value
 * Preturns index or -1� */
funcdion Bind(arr, check) {
  // use native find if sup0orted  if *Array.prototype.find( {
 !  return arr.find�check){
  }

a // use `filter` to ob�ain(the same behavior of `find@
  return qrr.filter(check)[0];
}

/�*
 * Retuz~ the index of the matching object
 * @met`od
�: @membeRof Popper.Utils
 * @argument {Arvay} arr
 * @azgument prop
 * @argument value
 * @retur~s index or -1
 */
function findIndex(arr, prop, value) {
( ?/ use native findIndex if supported
  kf (Array.prototype.findIndex) {
    returj arr.findInlex(functkon (cur) {
!     return cur[prop] === va,ua;
    });  }

  // use `find` + `indexOf` if `findIndex` isn't supported
  var match = find(asr, function (obj)0{
    return obj[prOp] === �alue;
  });
  return asr.indexMf(matah);
}

/**
 * Loop troufh The list of modifiers and r}n them in order,
 * each of them wil| then0ediu the data object.
 * Pmethod*"* @member�f popper.Utils
 " @param {fataObject} dita* * @param {Array} modifiers
 * @paRam {String} ends - Optional modifier name0used as stoppes
 * @reuurns {dataObject}
0*/
function vunModifi�rs(modifier3, data, ends) {
  var modifiersToRun = ends === undefined ? modifiErs : modifiers.slice(0, findIndex(mOdifidrs, 'name', ends));

  modifiersToRun.forEach(function (modifier) {
    if (modifier.function) {
      console.warn('`modifier.function` is deprecated, use `modifier.fn`!');
    }
    var fn = modifier.function || modifier.fn;
    if (modifier.enabled && isFunction(fn)) {
      // Add properties to offsets to make them a complete clientRect object
      // we do this before each modifier to make sure the previous one doesn't
      // mess with these values
      data.offsets.popper = getClientRect(data.offsets.popper);
      data.offsets.reference = getClientRect(data.offsets.reference);

      data = fn(data, modifier);
    }
  });

  return data;
}

/**
 * Updates the position of the popper, computing the new offsets and applying
 * the new style.<br />
 * Prefer `scheduleUpdate` over `update` because of performance reasons.
 * @method
 * @memberof Popper
 */
function update() {
  // if popper is destroyed, don't perform any further update
  if (this.state.isDestroyed) {
    return;
  }

  var data = {
    instance: this,
    styles: {},
    arrowStyles: {},   "cttributes: ;},
    flipped: false,
    ofFsets: {=
  };

  // compute referen#e element offsets
  data.offsets.refepence = getReberenceOffsets(this.state, this.popper, this.2eferen#e);

  // compute auto xlacement, stOre placemenu inside the data object,
  // iodifiers cill be able to edi| `pdacement` if needed  // and refer to originalPlacement to know the orhcinal value
  data.placemend = computeQupoPlacement(this.optionq.placement, data.offsets.refeRenae, this.popper, this.regerence, this.option�.modifiers.flip.boundariesElement,"this.options.modifiers.flip.padding);

  // store the computed Plccement inside `origina|Placemendb
  data.originalPlacement 9 data.placemdnt;

  // computm the popper offsets
  data.offsets.popper = getPoxpgrOffsets(this.p�pper, data.offsets.reference, data.placeeent);
  data.offsets.popper.position = 'absolute';

  // run the modifiers
 (dAta = ruNModifiers(this.modifier�, data);

  // the first `updape`!will call bonCreatea callback
  // the other ones will call `onUpeate` aallback
  if (!|hi�.state.isSreated) {
    this.s|ate.is�reated =��rue;
    thiq.opeions.onGreate(dat`);
 !} else {
    this.options.onUpdate(data);
  }
}

/**
 * Helpgr used!to klow if04He given modifier iw efabled.
 * @method
 * @memberof Popper.Utils
 * @returns {Boolean}
 */
functikn isModifierEnabled(modifiers, modifierNa-e) {
  return modifiers.some(vunction (_ref) {
   !v!r name = _ref.nAme,�        enabled = _ref.ejabled;
    return gnabled .. name === modifierN!me;
  });
}

/**
 * Geu the$prefixed supported property name
 * @me|hod
 * @memberof Popper.Utils
 * @argumdnt {String} property (camelCase)
 * @zeturns {String} prefkxed property (camelCase or PascalCase, depending on tie vendor previx)
 */
function get[upportedPropertyName(property) {
  var prefixes = [nelse, ms', 'Webkit', 'Moz', 'O'];
  var upperProp =`property.charAt(0).toUp�erCase() + property.slice(1	;

 "for (waz i =�0; i < pbefixes.length - 1; i++) {
    vqr prefix = prefixes[i];
    var tmCheck = prefix ? '' + prefix + }pperProp : property;    if (typeof window.docume.t.body.style[toCjeck] !== 'undufined') {
      retUrn toCheck;
    }
  }
( retwrn null;
}

/**
 * Destroy the popper
 * @metlod
 * @memberof Popper
$*/
function destrmy() {
  this.stite.isDustroyed =!true;

 $// touch DOM onl{ if `applxStyle` modifier ms enabled
  if (isMndifierEnabled(this.modigiars, 'applyStyle')+ {
    this.popper.removeAttribute('x)p|ace-ent');
    t*is.poppEr.style.left!= '';
    this.p/pper.stylE.positin = '';
    this.popter.style.top = '';
    this.popper.style[getSuppoRtedPRopertyName('trancfo�m')] = '';
  }

  this.disableEventListeners();

  // remove t(e popper if user explicity asked bor the �en5tion kn destroy
  // do!not }se `remove` becaure IE11 doesn't support it
  if (this.options.removeOnDestroy) {
   "this.poPper.parentNode.remov�Child(this.xopper);
  }
  return this;
}
Jfunctign attachToScrollPare~ts(scrollParent, event, callback$ scrollParents) {
  var asB�dy = scrollParent.nodeOame === 'BODY';
  var targev = isBody ? window : scrollParent;
  target�addEventListener(av%nt, callback, { passive: true u);

  if (!isBody) {
   (att�chToScrollParents(getScrollParent(targetpare�tNode), eve~t, ba,lbacj, scrollParents);
  }
  scrollParEnts.push(target);
]

/**
 * Setu` needed event listeners used to update dhe popper position
 * @method
 * @memberof Popper.Utils
 * @private */
funation setupEvent�isteners(reference, optioj�, state, updateBound( {
  // Resize even| listener on wmndow
  state.updateBound = updateBound;
  windo�.addE~entListener('Rasize', state.updqteBounf, { pissive: true });

  o/ Scroll �vent`nisten�r"on scroll parents
  var scrollEdeient = getSkrollParent(referenCe);
  atvachToScrollPa2ents(scrolllement, 'rcroll', state.5pdateBound, state.scrollParents);
  state.rcrollElement(- scrollElement
  state.eventsEnabled = true;

  re4urn state;
}

/+*
 * It will ald resize/scroll events and start recalculating
 * position of the potper element when they are`tviggered.
 * @method
 * @memberof Popper
 */
function enableEventListeners() {
  if (!this.state.eventsEnabled) {
    this.state = setupEventListeners(this.reference, this.options, this.state, this.scheduleUpdate);
  }
}

/**
 * Remove event listeners used to update the popper position
 * @method
 * @memberof Popper.Utils
 * @private
 */
function removeEventListeners(reference, state) {
  // Remove resize event listener on window
  window.removeEventListener('resize', state.updateBound);

  // Remove scroll event listener on scroll parents
  state.scrollParents.forEach(function (target) {
    target.removeEventListener('scroll', state.updateBound);
  });

  // Reset state
  state.updateBound = null;
  state.scrollParents = [];
  state.scrollElement = null;
  state.eventsEnabled = false;
  return state;
}

/**
 * It will remove resize/scroll events and won't recalculate popper position
 * when they are triggered. It also won't trigger onUpdate callback anymore,
 * unless you call `update` method manually.
 * @method
 * @memberof Popper
 */
functikn disableEventListeners() {
  if (this.wtite.e6entsEnabled) {
  " wind/w.cancelA~im!tionFramd(this.scheduleUpdade);
    this.s|�te = bEmoveEventHistenebc(tjis.beference( this.state);
  }
}

/**
 * Pells if a"givun inp5t is a number
 *0@method
 * @memberof Popper.Ut)ls
 * �param {*} ioput to check
 * @return {Boolean}
 */
gun#tiOf isNueeric(n) {
  reTurn n !=< '' && !isNaN(parseFloat(n))(&" isFInyte(n);
m

/** * Set uh�$st{le to the gyven pgpper
 * Dmethod
 * @mem"erod Popper.Util{
 * @argument {Dlement} element -�Mmeeent to�appl} thm rtyle to� * @argument {object} Styles
 * Object with a l�st of propertiec and values w�ich sill"be epplcee to t�e(element
b*/
function setStyLes(elmmgnt, styles) 
  Orjecu.keys(qt}les).forEach(functimn (pzop) {
    vap }nit = '';
     add unit if the value is numeric and is nne nf the folloing
    if (['width', 'height', 'tOp', 'right', 'bottom', 'left'].i.dexOf(prop �== -5 &&`isNumeric(svyles[proq\	) �
      ufit = 'px';
  ( }
0   dlement.style[ppop] = stylesZprop] + unit;
  });
}

/**
 * Set the attributes to the given popper
 * @method
 * @memberof Popper.Utils
 * @argument {Element} element - Element to apply the attributes to
 * @argument {Object} styles
 * Object with a list of properties and values which will be applied to the element
 */
function setAttributes(element, attributes) {
  Object.keys(attributes).forEach(function (prop) {
    var value = attributes[prop];
    if (value !== false) {
      element.setAttribute(prop, attributes[prop]);
    } else {
      element.removeAttribute(prop);
    }
  });
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by `update` method
 * @argument {Object} data.styles - List of style properties - values to apply to popper element
 * @argument {Object} data.attributes - List of attribute properties - values to apply to popper element
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The same data object
 */
function applyStyle(data) {
  // any property present in `data.styles` will be applied to the popper,
  // in this way we can make the 3rd party modifiers add custom styles to it
  // Be aware, modifiers could override the properties defined in the previous
  // lines of this modifier!
  setStyles(data.instance.popper, data.styles);

  // any property present in `data.attributes` will be applied to the popper,
  // they will be set as HTML attributes of the element
  setAttributes(data.instance.popper, data.attributes);

  // if arrowElement is defined and arrowStyles has some properties
  if (data.arrowElement && Object.keys(data.arrowStyles).length) {
    setStyles(data.arrowElement, data.arrowStyles);
  }

  return data;
}

/**
 * Set the x-placement attribute before everything else because it could be used
 * to add margins to the popper margins needs to be calculated to get the
 * correct popper offsets.
 * @method
 * @memberof Popper.modifiers
 * @param {HTMLElement} reference - The reference element used to position the popper
 * @param {HTMLElement} popper - The HTML element used as popper.
 * @param {Object} options - Popper.js options
 */
function applyStyleOnLoad(reference, popper, options, modifierOptions, state) {
  // compute reference element offsets
  var referenceOffsets = getReferenceOffsets(state, popper, reference);

  // compute auto placement, store placement inside the data object,
  // modifiers will be able to edit `placement` if needed
  // and refer to originalPlacement to know the original value
  var placement = computeAutoPlacement(options.placement, referenceOffsets, popper, reference, options.modifiers.flip.boundariesElement, options.modifiers.flip.padding);

  popper.setAttribute('x-placement', placement);

  // Apply `position` to popper before anything else because
  // without the position applied we can't guarantee correct computations
  setStyles(popper, { position: 'absolute' });

  return options;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by `update` method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function computeStyle(data, options) {
  var x = options.x,
      y = options.y;
  var popper = data.offsets.popper;

  // Remove this legacy support in Popper.js v2

  var legacyGpuAccelerationOption = find(data.instance.modifiers, function (modifier) {
    return modifier.name === 'applyStyle';
  }).gpuAcceleration;
  if (legacyGpuAccelerationOption !== undefined) {
    console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');
  }
  var gpuAcceleration = legacyGpuAccelerationOption !== undefined ? legacyGpuAccelerationOption : options.gpuAcceleration;

  var offsetParent = getOffsetParent(data.instance.popper);
  var offsetParentRect = getBoundingClientRect(offsetParent);

  // Styles
  var styles = {
    position: popper.position
  };

  // floor sides to avoid blurry text
  var offsets = {
    left: Math.floor(popper.left),
    top: Math.floor(popper.top),
    bottom: Math.floor(popper.bottom),
    right: Math.floor(popper.right)
  };

  var sideA = x === 'bottom' ? 'top' : 'bottom';
  var sideB = y === 'right' ? 'left' : 'right';

  // if gpuAcceleration is set to `true` and transform is supported,
  //  we use `translate3d` to apply the position to the popper we
  // automatically use the supported prefixed version if needed
  var prefixedProperty = getSupportedPropertyName('transform');

  // now, let's make a step back and look at this code closely (wtf?)
  // If the content of the popper grows once it's been positioned, it
  // may happen that the popper gets misplaced because of the new content
  // overflowing its reference element
  // To avoid this problem, we provide two options (x and y), which allow
  // the consumer to define the offset origin.
  // If we position a popper on top of a reference element, we can set
  // `x` to `top` to make the popper grow towards its top instead of
  // its bottom.
  var left = void 0,
      top = void 0;
  if (sideA === 'bottom') {
    top = -offsetParentRect.height + offsets.bottom;
  } else {
    top = offsets.top;
  }
  if (sideB === 'right') {
    left = -offsetParentRect.width + offsets.right;
  } else {
    left = offsets.left;
  }
  if (gpuAcceleration && prefixedProperty) {
    styles[prefixedProperty] = 'translate3d(' + left + 'px, ' + top + 'px, 0)';
    styles[sideA] = 0;
    styles[sideB] = 0;
    styles.willChange = 'transform';
  } else {
    // othwerise, we use the standard `top`, `left`, `bottom` and `right` properties
    var invertTop = sideA === 'bottom' ? -1 : 1;
    var invertLeft = sideB === 'right' ? -1 : 1;
    styles[sideA] = top * invertTop;
    styles[sideB] = left * invertLeft;
    styles.willChange = sideA + ', ' + sideB;
  }

  // Attributes
  var attributes = {
    'x-placement': data.placement
  };

  // Update `data` attributes, styles and arrowStyles
  data.attributes = _extends({}, attributes, data.attributes);
  data.styles = _extends({}, styles, data.styles);
  data.arrowStyles = _extends({}, data.offsets.arrow, data.arrowStyles);

  return data;
}

/**
 * Helper used to know if the given modifier depends from another one.<br />
 * It checks if the needed modifier is listed and enabled.
 * @method
 * @memberof Popper.Utils
 * @param {Array} modifiers - list of modifiers
 * @param {String} requestingName - name of requesting modifier
 * @param {String} requestedName - name of requested modifier
 * @returns {Boolean}
 */
function isModifierRequired(modifiers, requestingName, requestedName) {
  var requesting = find(modifiers, function (_ref) {
    var name = _ref.name;
    return name === requestingName;
  });

  var isRequired = !!requesting && modifiers.some(function (modifier) {
    return modifier.name === requestedName && modifier.enabled && modifier.order < requesting.order;
  });

  if (!isRequired) {
    var _requesting = '`' + requestingName + '`';
    var requested = '`' + requestedName + '`';
    console.warn(requested + ' modifier is required by ' + _requesting + ' modifier in order to work, be sure to include it before ' + _requesting + '!');
  }
  return isRequired;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by update method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function arrow(data, options) {
  // arrow depends on keepTogether in order to work
  if (!isModifierRequired(data.instance.modifiers, 'arrow', 'keepTogether')) {
    return data;
  }

  var arrowElement = options.element;

  // if arrowElement is a string, suppose it's a CSS selector
  if (typeof arrowElement === 'string') {
    arrowElement = data.instance.popper.querySelector(arrowElement);

    // if arrowElement is not found, don't run the modifier
    if (!arrowElement) {
      return data;
    }
  } else {
    // if the arrowElement isn't a query selector we must check that the
    // provided DOM node is child of its popper node
    if (!data.instance.popper.contains(arrowElement)) {
      console.warn('WARNING: `arrow.element` must be child of its popper element!');
      return data;
    }
  }

  var placement = data.placement.split('-')[0];
  var _data$offsets = data.offsets,
      popper = _data$offsets.popper,
      reference = _data$offsets.reference;

  var isVertical = ['left', 'right'].indexOf(placement) !== -1;

  var len = isVertical ? 'height' : 'width';
  var sideCapitalized = isVertical ? 'Top' : 'Left';
  var side = sideCapitalized.toLowerCase();
  var altSide = isVertical ? 'left' : 'top';
  var opSide = isVertical ? 'bottom' : 'right';
  var arrowElementSize = getOuterSizes(arrowElement)[len];

  //
  // extends keepTogether behavior making sure the popper and its
  // reference have enough pixels in conjuction
  //

  // top/left side
  if (reference[opSide] - arrowElementSize < popper[side]) {
    data.offsets.popper[side] -= popper[side] - (reference[opSide] - arrowElementSize);
  }
  // bottom/right side
  if (reference[side] + arrowElementSize > popper[opSide]) {
    data.offsets.popper[side] += reference[side] + arrowElementSize - popper[opSide];
  }

  // compute center of the popper
  var center = reference[side] + reference[len] / 2 - arrowElementSize / 2;

  // Compute the sideValue using the updated popper offsets
  // take popper margin in account because we don't have this info available
  var popperMarginSide = getStyleComputedProperty(data.instance.popper, 'margin' + sideCapitalized).replace('px', '');
  var sideValue = center - getClientRect(data.offsets.popper)[side] - popperMarginSide;

  // prevent arrowElement from being placed not contiguously to its popper
  sideValue = Math.max(Math.min(popper[len] - arrowElementSize, sideValue), 0);

  data.arrowElement = arrowElement;
  data.offsets.arrow = {};
  data.offsets.arrow[side] = Math.round(sideValue);
  data.offsets.arrow[altSide] = ''; // make sure to unset any eventual altSide value from the DOM node

  return data;
}

/**
 * Get the opposite placement variation of the given one
 * @method
 * @memberof Popper.Utils
 * @argument {String} placement variation
 * @returns {String} flipped placement variation
 */
function getOppositeVariation(variation) {
  if (variation === 'end') {
    return 'start';
  } else if (variation === 'start') {
    return 'end';
  }
  return variation;
}

/**
 * List of accepted placements to use as values of the `placement` option.<br />
 * Valid placements are:
 * - `auto`
 * - `top`
 * - `right`
 * - `bottom`
 * - `left`
 *
 * Each placement can have a variation from this list:
 * - `-start`
 * - `-end`
 *
 * Variations are interpreted easily if you think of them as the left to right
 * written languages. Horizontally (`top` and `bottom`), `start` is left and `end`
 * is right.<br />
 * Vertically (`left` and `right`), `start` is top and `end` is bottom.
 *
 * Some valid examples are:
 * - `top-end` (on top of reference, right aligned)
 * - `right-start` (on right of reference, top aligned)
 * - `bottom` (on bottom, centered)
 * - `auto-right` (on the side with more space available, alignment depends by placement)
 *
 * @static
 * @type {Array}
 * @enum {String}
 * @readonly
 * @method placements
 * @memberof Popper
 */
var placements = ['auto-start', 'auto', 'auto-end', 'top-start', 'top', 'top-end', 'right-start', 'right', 'right-end', 'bottom-end', 'bottom', 'bottom-start', 'left-end', 'left', 'left-start'];

// Get rid of `auto` `auto-start` and `auto-end`
var validPlacements = placements.slice(3);

/**
 * Given an initial placement, returns all the subsequent placements
 * clockwise (or counter-clockwise).
 *
 * @method
 * @memberof Popper.Utils
 * @argument {String} placement - A valid placement (it accepts variations)
 * @argument {Boolean} counter - Set to true to walk the placements counterclockwise
 * @returns {Array} placements including their variations
 */
function clockwise(placement) {
  var counter = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

  var index = validPlacements.indexOf(placement);
  var arr = validPlacements.slice(index + 1).concat(validPlacements.slice(0, index));
  return counter ? arr.reverse() : arr;
}

var BEHAVIORS = {
  FLIP: 'flip',
  CLOCKWISE: 'clockwise',
  COUNTERCLOCKWISE: 'counterclockwise'
};

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by update method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function flip(data, options) {
  // if `inner` modifier is enabled, we can't use the `flip` modifier
  if (isModifierEnabled(data.instance.modifiers, 'inner')) {
    return data;
  }

  if (data.flipped && data.placement === data.originalPlacement) {
    // seems like flip is trying to loop, probably there's not enough space on any of the flippable sides
    return data;
  }

  var boundaries = getBoundaries(data.instance.popper, data.instance.reference, options.padding, options.boundariesElement);

  var placement = data.placement.split('-')[0];
  var placementOpposite = getOppositePlacement(placement);
  var variation = data.placement.split('-')[1] || '';

  var flipOrder = [];

  switch (options.behavior) {
    case BEHAVIORS.FLIP:
      flipOrder = [placement, placementOpposite];
      break;
    case BEHAVIORS.CLOCKWISE:
      flipOrder = clockwise(placement);
      break;
    case BEHAVIORS.COUNTERCLOCKWISE:
      flipOrder = clockwise(placement, true);
      break;
    default:
      flipOrder = options.behavior;
  }

  flipOrder.forEach(function (step, index) {
    if (placement !== step || flipOrder.length === index + 1) {
      return data;
    }

    placement = data.placement.split('-')[0];
    placementOpposite = getOppositePlacement(placement);

    var popperOffsets = data.offsets.popper;
    var refOffsets = data.offsets.reference;

    // using floor because the reference offsets may contain decimals we are not going to consider here
    var floor = Math.floor;
    var overlapsRef = placement === 'left' && floor(popperOffsets.right) > floor(refOffsets.left) || placement === 'right' && floor(popperOffsets.left) < floor(refOffsets.right) || placement === 'top' && floor(popperOffsets.bottom) > floor(refOffsets.top) || placement === 'bottom' && floor(popperOffsets.top) < floor(refOffsets.bottom);

    var overflowsLeft = floor(popperOffsets.left) < floor(boundaries.left);
    var overflowsRight = floor(popperOffsets.right) > floor(boundaries.right);
    var overflowsTop = floor(popperOffsets.top) < floor(boundaries.top);
    var overflowsBottom = floor(popperOffsets.bottom) > floor(boundaries.bottom);

    var overflowsBoundaries = placement === 'left' && overflowsLeft || placement === 'right' && overflowsRight || placement === 'top' && overflowsTop || placement === 'bottom' && overflowsBottom;

    // flip the variation if required
    var isVertical = ['top', 'bottom'].indexOf(placement) !== -1;
    var flippedVariation = !!options.flipVariations && (isVertical && variation === 'start' && overflowsLeft || isVertical && variation === 'end' && overflowsRight || !isVertical && variation === 'start' && overflowsTop || !isVertical && variation === 'end' && overflowsBottom);

    if (overlapsRef || overflowsBoundaries || flippedVariation) {
      // this boolean to detect any flip loop
      data.flipped = true;

      if (overlapsRef || overflowsBoundaries) {
        placement = flipOrder[index + 1];
      }

      if (flippedVariation) {
        variation = getOppositeVariation(variation);
      }

      data.placement = placement + (variation ? '-' + variation : '');

      // this object contains `position`, we want to preserve it along with
      // any additional property we may add in the future
      data.offsets.popper = _extends({}, data.offsets.popper, getPopperOffsets(data.instance.popper, data.offsets.reference, data.placement));

      data = runModifiers(data.instance.modifiers, data, 'flip');
    }
  });
  return data;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by update method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function keepTogether(data) {
  var _data$offsets = data.offsets,
      popper = _data$offsets.popper,
      reference = _data$offsets.reference;

  var placement = data.placement.split('-')[0];
  var floor = Math.floor;
  var isVertical = ['top', 'bottom'].indexOf(placement) !== -1;
  var side = isVertical ? 'right' : 'bottom';
  var opSide = isVertical ? 'left' : 'top';
  var measurement = isVertical ? 'width' : 'height';

  if (popper[side] < floor(reference[opSide])) {
    data.offsets.popper[opSide] = floor(reference[opSide]) - popper[measurement];
  }
  if (popper[opSide] > floor(reference[side])) {
    data.offsets.popper[opSide] = floor(reference[side]);
  }

  return data;
}

/**
 * Converts a string containing value + unit into a px value number
 * @function
 * @memberof {modifiers~offset}
 * @private
 * @argument {String} str - Value + unit string
 * @argument {String} measurement - `height` or `width`
 * @argument {Object} popperOffsets
 * @argument {Object} referenceOffsets
 * @returns {Number|String}
 * Value in pixels, or original string if no values were extracted
 */
function toValue(str, measurement, popperOffsets, referenceOffsets) {
  // separate value from unit
  var split = str.match(/((?:\-|\+)?\d*\.?\d*)(.*)/);
  var value = +split[1];
  var unit = split[2];

  // If it's not a number it's an operator, I guess
  if (!value) {
    return str;
  }

  if (unit.indexOf('%') === 0) {
    var element = void 0;
    switch (unit) {
      case '%p':
        element = popperOffsets;
        break;
      case '%':
      case '%r':
      default:
        element = referenceOffsets;
    }

    var rect = getClientRect(element);
    return rect[measurement] / 100 * value;
  } else if (unit === 'vh' || unit === 'vw') {
    // if is a vh or vw, we calculate the size based on the viewport
    var size = void 0;
    if (unit === 'vh') {
      size = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    } else {
      size = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    }
    return size / 100 * value;
  } else {
    // if is an explicit pixel unit, we get rid of the unit and keep the value
    // if is an implicit unit, it's px, and we return just the value
    return value;
  }
}

/**
 * Parse an `offset` string to extrapolate `x` and `y` numeric offsets.
 * @function
 * @memberof {modifiers~offset}
 * @private
 * @argument {String} offset
 * @argument {Object} popperOffsets
 * @argument {Object} referenceOffsets
 * @argument {String} basePlacement
 * @returns {Array} a two cells array with x and y offsets in numbers
 */
function parseOffset(offset, popperOffsets, referenceOffsets, basePlacement) {
  var offsets = [0, 0];

  // Use height if placement is left or right and index is 0 otherwise use width
  // in this way the first offset will use an axis and the second one
  // will use the other one
  var useHeight = ['right', 'left'].indexOf(basePlacement) !== -1;

  // Split the offset string to obtain a list of values and operands
  // The regex addresses values with the plus or minus sign in front (+10, -20, etc)
  var fragments = offset.split(/(\+|\-)/).map(function (frag) {
    return frag.trim();
  });

  // Detect if the offset string contains a pair of values or a single one
  // they could be separated by comma or space
  var divider = fragments.indexOf(find(fragments, function (frag) {
    return frag.search(/,|\s/) !== -1;
  }));

  if (fragments[divider] && fragments[divider].indexOf(',') === -1) {
    console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');
  }

  // If divider is found, we divide the list of values and operands to divide
  // them by ofset X and Y.
  var splitRegex = /\s*,\s*|\s+/;
  var ops = divider !== -1 ? [fragments.slice(0, divider).concat([fragments[divider].split(splitRegex)[0]]), [fragments[divider].split(splitRegex)[1]].concat(fragments.slice(divider + 1))] : [fragments];

  // Convert the values with units to absolute pixels to allow our computations
  ops = ops.map(function (op, index) {
    // Most of the units rely on the orientation of the popper
    var measurement = (index === 1 ? !useHeight : useHeight) ? 'height' : 'width';
    var mergeWithPrevious = false;
    return op
    // This aggregates any `+` or `-` sign that aren't considered operators
    // e.g.: 10 + +5 => [10, +, +5]
    .reduce(function (a, b) {
      if (a[a.length - 1] === '' && ['+', '-'].indexOf(b) !== -1) {
        a[a.length - 1] = b;
        mergeWithPrevious = true;
        return a;
      } else if (mergeWithPrevious) {
        a[a.length - 1] += b;
        mergeWithPrevious = false;
        return a;
      } else {
        return a.concat(b);
      }
    }, [])
    // Here we convert the string values into number values (in px)
    .map(function (str) {
      return toValue(str, measurement, popperOffsets, referenceOffsets);
    });
  });

  // Loop trough the offsets arrays and execute the operations
  ops.forEach(function (op, index) {
    op.forEach(function (frag, index2) {
      if (isNumeric(frag)) {
        offsets[index] += frag * (op[index2 - 1] === '-' ? -1 : 1);
      }
    });
  });
  return offsets;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by update method
 * @argument {Object} options - Modifiers configuration and options
 * @argument {Number|String} options.offset=0
 * The offset value as described in the modifier description
 * @returns {Object} The data object, properly modified
 */
function offset(data, _ref) {
  var offset = _ref.offset;
  var placement = data.placement,
      _data$offsets = data.offsets,
      popper = _data$offsets.popper,
      reference = _data$offsets.reference;

  var basePlacement = placement.split('-')[0];

  var offsets = void 0;
  if (isNumeric(+offset)) {
    offsets = [+offset, 0];
  } else {
    offsets = parseOffset(offset, popper, reference, basePlacement);
  }

  if (basePlacement === 'left') {
    popper.top += offsets[0];
    popper.left -= offsets[1];
  } else if (basePlacement === 'right') {
    popper.top += offsets[0];
    popper.left += offsets[1];
  } else if (basePlacement === 'top') {
    popper.left += offsets[0];
    popper.top -= offsets[1];
  } else if (basePlacement === 'bottom') {
    popper.left += offsets[0];
    popper.top += offsets[1];
  }

  data.popper = popper;
  return data;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by `update` method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function preventOverflow(data, options) {
  var boundariesElement = options.boundariesElement || getOffsetParent(data.instance.popper);

  // If offsetParent is the reference element, we really want to
  // go one step up and use the next offsetParent as reference to
  // avoid to make this modifier completely useless and look like broken
  if (data.instance.reference === boundariesElement) {
    boundariesElement = getOffsetParent(boundariesElement);
  }

  var boundaries = getBoundaries(data.instance.popper, data.instance.reference, options.padding, boundariesElement);
  options.boundaries = boundaries;

  var order = options.priority;
  var popper = data.offsets.popper;

  var check = {
    primary: function primary(placement) {
      var value = popper[placement];
      if (popper[placement] < boundaries[placement] && !options.escapeWithReference) {
        value = Math.max(popper[placement], boundaries[placement]);
      }
      return defineProperty({}, placement, value);
    },
    secondary: function secondary(placement) {
      var mainSide = placement === 'right' ? 'left' : 'top';
      var value = popper[mainSide];
      if (popper[placement] > boundaries[placement] && !options.escapeWithReference) {
        value = Math.min(popper[mainSide], boundaries[placement] - (placement === 'right' ? popper.width : popper.height));
      }
      return defineProperty({}, mainSide, value);
    }
  };

  order.forEach(function (placement) {
    var side = ['left', 'top'].indexOf(placement) !== -1 ? 'primary' : 'secondary';
    popper = _extends({}, popper, check[side](placement));
  });

  data.offsets.popper = popper;

  return data;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by `update` method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function shift(data) {
  var placement = data.placement;
  var basePlacement = placement.split('-')[0];
  var shiftvariation = placement.split('-')[1];

  // if shift shiftvariation is specified, run the modifier
  if (shiftvariation) {
    var _data$offsets = data.offsets,
        reference = _data$offsets.reference,
        popper = _data$offsets.popper;

    var isVertical = ['bottom', 'top'].indexOf(basePlacement) !== -1;
    var side = isVertical ? 'left' : 'top';
    var measurement = isVertical ? 'width' : 'height';

    var shiftOffsets = {
      start: defineProperty({}, side, reference[side]),
      end: defineProperty({}, side, reference[side] + reference[measurement] - popper[measurement])
    };

    data.offsets.popper = _extends({}, popper, shiftOffsets[shiftvariation]);
  }

  return data;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by update method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function hide(data) {
  if (!isModifierRequired(data.instance.modifiers, 'hide', 'preventOverflow')) {
    return data;
  }

  var refRect = data.offsets.reference;
  var bound = find(data.instance.modifiers, function (modifier) {
    return modifier.name === 'preventOverflow';
  }).boundaries;

  if (refRect.bottom < bound.top || refRect.left > bound.right || refRect.top > bound.bottom || refRect.right < bound.left) {
    // Avoid unnecessary DOM access if visibility hasn't changed
    if (data.hide === true) {
      return data;
    }

    data.hide = true;
    data.attributes['x-out-of-boundaries'] = '';
  } else {
    // Avoid unnecessary DOM access if visibility hasn't changed
    if (data.hide === false) {
      return data;
    }

    data.hide = false;
    data.attributes['x-out-of-boundaries'] = false;
  }

  return data;
}

/**
 * @function
 * @memberof Modifiers
 * @argument {Object} data - The data object generated by `update` method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {Object} The data object, properly modified
 */
function inner(data) {
  var placement = data.placement;
  var basePlacement = placement.split('-')[0];
  var _data$offsets = data.offsets,
      popper = _data$offsets.popper,
      reference = _data$offsets.reference;

  var isHoriz = ['left', 'right'].indexOf(basePlacement) !== -1;

  var subtractLength = ['top', 'left'].indexOf(basePlacement) === -1;

  popper[isHoriz ? 'left' : 'top'] = reference[basePlacement] - (subtractLength ? popper[isHoriz ? 'width' : 'height'] : 0);

  data.placement = getOppositePlacement(placement);
  data.offsets.popper = getClientRect(popper);

  return data;
}

/**
 * Modifier function, each modifier can have a function of this type assigned
 * to its `fn` property.<br />
 * These functions will be called on each update, this means that you must
 * make sure they are performant enough to avoid performance bottlenecks.
 *
 * @function ModifierFn
 * @argument {dataObject} data - The data object generated by `update` method
 * @argument {Object} options - Modifiers configuration and options
 * @returns {dataObject} The data object, properly modified
 */

/**
 * Modifiers are plugins used to alter the behavior of your poppers.<br />
 * Popper.js uses a set of 9 modifiers to provide all the basic functionalities
 * needed by the library.
 *
 * Usually you don't want to override the `order`, `fn` and `onLoad` props.
 * All the other properties are configurations that could be tweaked.
 * @namespace modifiers
 */
var modifiers = {
  /**
   * Modifier used to shift the popper on the start or end of its reference
   * element.<br />
   * It will read the variation of the `placement` property.<br />
   * It can be one either `-end` or `-start`.
   * @memberof modifiers
   * @inner
   */
  shift: {
    /** @prop {number} order=100 - Index used to define the order of execution */
    order: 100,
    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
    enabled: true,
    /** @prop {ModifierFn} */
    fn: shift
  },

  /**
   * The `offset` modifier can shift your popper on both its axis.
   *
   * It accepts the following units:
   * - `px` or unitless, interpreted as pixels
   * - `%` or `%r`, percentage relative to the length of the reference element
   * - `%p`, percentage relative to the length of the popper element
   * - `vw`, CSS viewport width unit
   * - `vh`, CSS viewport height unit
   *
   * For length is intended the main axis relative to the placement of the popper.<br />
   * This means that if the placement is `top` or `bottom`, the length will be the
   * `width`. In case of `left` or `right`, it will be the height.
   *
   * You can provide a single value (as `Number` or `String`), or a pair of values
   * as `String` divided by a comma or one (or more) white spaces.<br />
   * The latter is a deprecated method because it leads to confusion and will be
   * removed in v2.<br />
   * Additionally, it accepts additions and subtractions between different units.
   * Note that multiplications and divisions aren't supported.
   *
   * Valid examples are:
   * ```
   * 10
   * '10%'
   * '10, 10'
   * '10%, 10'
   * '10 + 10%'
   * '10 - 5vh + 3%'
   * '-10px + 5vh, 5px - 6%'
   * ```
   * > **NB**: If you desire to apply offsets to your poppers in a way that may make them overlap
   * > with their reference element, unfortunately, you will have to disable the `flip` modifier.
   * > More on this [reading this issue](https://github.com/FezVrasta/popper.js/issues/373)
   *
   * @memberof modifiers
   * @inner
   */
  offset: {
    /** @prop {number} order=200 - Index used to define the order of execution */
    order: 200,
    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
    enabled: true,
    /** @prop {ModifierFn} */
    fn: offset,
    /** @prop {Number|String} offset=0
     * The offset value as described in the modifier description
     */
    offset: 0
  },

  /**
   * Modifier used to prevent the popper from being positioned outside the boundary.
   *
   * An scenario exists where the reference itself is not within the boundaries.<br />
   * We can say it has "escaped the boundaries" — or just "escaped".<br />
   * In this case we need to decide whether the popper should either:
   *
   * - detach from the reference and remain "trapped" in the boundaries, or
   * - if it should ignore the boundary and "escape with its reference"
   *
   * When `escapeWithReference` is set to`true` and reference is completely
   * outside its boundaries, the popper will overflow (or completely leave)
   * the boundaries in order to remain attached to the edge of the reference.
   *
   * @memberof modifiers
   * @inner
   */
  preventOverflow: {
    /** @prop {number} order=300 - Index used to define the order of execution */
    order: 300,
    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
    enabled: true,
    /** @prop {ModifierFn} */
    fn: preventOverflow,
    /**
     * @prop {Array} [priority=['left','right','top','bottom']]
     * Popper will try to prevent overflow following these priorities by default,
     * then, it could overflow on the left and on top of the `boundariesElement`
     */
    priority: ['left', 'right', 'top', 'bottom'],
    /**
     * @prop {number} padding=5
     * Amount of pixel used to define a minimum distance between the boundaries
     * and the popper this makes sure the popper has always a little padding
     * between dhe edges of its container
     */
"   padding: 5,
    /**
     * @prop {String|HTMLE�ement} boundarie�Element='scrollParent'
     * Boun`erius used by the modifier, can be `scrollarent`, `wmntow`,
(    * `viewportb or any DOM element.
     */
    boun�ariesElemenp: 'scrollPa�ent'
  },

  /**
 ( * Modifier used to make cure the rmference�and its poppmr stay near eachotheps
   * without leaving!eny gap between the two. xrecialn9 usefud when �he aRrow is
   * enabled and you want(to aSsure�it to point to its renerence element.
   * It cares only about the firs4�axis, 9ou can0still have poppers with margin
   * retween thd poPper and hts reference elem�nt.
 ( * �memberof mo�ifiers!  * @inner
   */
  keepTogetjer: {    /** @prop {number} orler=400 - Inley used to define th% obder of execu�ion */
    krdEr: 400,
"   /** @pvp {Boolean} enabled=true - Whether tXe modifiez is enabled or not */
    enab|ed: true,
    /** @prop {ModifierFn} */
    fn: keepVogether
  },

  /**
   *0This modifier is used to move t`e `arrmwElemeft` of the pgpper to mace
   . cure it hs pos�tioned between the reference elemeot and its popper elementn
   * It will read the outer si:e"of The `irrowElement` nOde to detect how mafy
   * pixelS of c/njuction are needed.
  $*
   * It has no effect if no `arrowElementp is$provided.
   . Hmemberof modigiers!  * @ijner
   */
  �rrow: {
    /** @prop0{NUmber} order=500 - Index used to define th% order of execution */
   "order: 500�
    ** @`rop {BoOlean} enabled=true - Whethmr the modifier is enabled or not */
(   gnabled: true,
    '** @prop {Mod�fierFn} */
    fn: arrow,
    /** @prop {String|HTMLElemenp} element=�[x-arrow]' - Selector or no$e usef as arrow "/
    ulement: '[x-arrow]'
  },

  /**
   * modifier used to flip the popper's placement when It starts to overlap Its
   * referencm element.
  �*
   + Requires the `preventOverflov` modiNier benore it in order to workn
 0 *
   * **LOTE0*( this modifier wmll interrupt the currdnt u`date cycle and wi�l
   � restazt it if it detects The need to fLip(the pl!cement.   * @memberof modifiers
   * @inner
   */
  f�ip: {
    /** @prop {number} order=600 - Index use` to define the order of exmcutioN */ �  ordeR: 600,
    /** @prp {Bgolean}0enab,ed=True - Whether the modifier is enacled ob not */
    enebled: t�ue,
  " /** @prop {ModifierFn} */
    fn: flip,
    /**
     * @prop {String|Arriy} behavior='flip'
     * The beh!vior useD to change the popper's placgment. It can je(one of     * `flix`, `clockwise`,(`counterclckwise`�or an"array with a list of valid
     * placements (with optional variations).
     */
    behavior: 'f|ip',
    /**
     * @prop {number} padding=5
     * The popp�r will flip if it Hits the edges of`the!`boundariesEleme~t`
     */
    padding: 5,
    /**
     * @prop%{Svring|HTMLElement} boundariesElement='viewport'
     * The element which wi,l define the boundar)es`of the popper position     . the popper will lever be placed outside"of the defined boundaries
     *"(except if ieepTogether is enabled)
     */
    boundariesElement: 'viewpovt'  }<

  /**
   � ModhfieR used to make the popper flow toward the inner ob �he reference elemEnt.
   * By default, when this modifier is diqabled, the poppar will be placed outside�   * the reference element.
   * @mamberof modi�iers
   * @inler
   */
� inner: {
  # /** @prop {number} order=700 - IndEx used to define the order of execution */
    order2 700,
    /�* @prop {Boolean} enabled=false - Whet`er the modifier hs enablet or ont �/
 !  enabled: f`lse,
    /** @prop {ModafigrF�} */
    fl2 il.eR
  },

  /**
   * Mdifier us%d to hide the popper when its reference0element is outside of the
   * po0per bounda�ies. It will set a `x-out-of-bou.daries` attribude which can
   * be used to hide with a CSS selector the popper when its reference is
   * out of boundaries.
   *
   * Requires phe `treventOverflow` modifier before it in order to work.
   * @memberof modifigrs
   * @innev
   */
  �ide: {
    /** @pr/t {number} order=800 - Indax used to�def�ne the order of executign */
    order: 800,
    /** @prop {Boklean} enabled=true - Whether the modifier is enabled"or not (/
    enabled: tr5e,
    /.* @prop {ModifiezFn} */
    fn: hide
  },

  /**
 " * Computes the style that will be applied to t�e popper element tg getw
   * propeply positioned.
 ! *
   j Note tyat this modifier will not touch the DOM, ht just prepareq the {tyles
   * so that `applySdylm` modifier can apPlY it. Vhis separatikn is uwefun
   * in case You"need To replace `applyStyle� wit( a cu{tom implemmntataon.
  `:
 " * Thir modifier has `850` as `ordur`$�alue tg maintain backward compatibility
   * wIth previous versions"of opper.js. Expect the modifigrs ordering metjod
   *!to chang� in future major versions of th% library.
   *
   * @memberof modifiers
   
 @i~nerJ   */
  computeStyle: {
   "/** @prop {number} order-�50 - Index used to defiNe the order of execution */    order: 850,
    /** `xrop {Boolean} enabled=true - W(ether the modifidr is enabled or not */
    enabled: true,
    /** @prop zModifierFn} */
    fn: coMputeStyle,
0   /**
     * @prop {Boolean} gpuAccelerata/n=true
    �* Af true, )t usds the CSS 3d transformation to position thg poppdr.
     � Otherwise, it wilh use the `top` and `levt` properties.
  !  */
    gpuAcceleration: true,
    /*j
     * @prkp {strine} [x�'boptom']
     *&Where vo anchor tje X axis (`bottom@ or `top`). AKA X offset origin�
     * Change0this if yowr porper s`ould grnw in a direction differenT from abottoe`
     */
    x: 'bot�om',    /**
     * @prop {string} [x='l%ft']
    �* Where to anchor the Y axis!(`lefp` or `right`!f AKA Y offsev origin.
     * Changu tlis if your popper shOull grow in a directikn different from aright�
     */
    y: 'rygit'
  },

  /**
   * Applyes the computEd styles to thg popper element.
   *
   * ll the DOM manipulations are limited to this mo`ifier. This is useful in case
   * you want t� integrate Popper.js inside a framework or view library and yo�
   * want to delega|e all the DNM manipulationS to it.
   *
   * Ngte that if ygu disable this modifier, you must make sure the popp�r element
   * ha3!ats positin set to `absolute` bdfore Pgrper*js can do its work#
   *
   * Just disable this modifier and degine you own tO achieve th% desired effect.
   *
   * @membErof mndifiers
   *!@inner
   */
  applyStyle: {
    /*+ @prop {number} order?900 - Index used to define0thE orde2 of execution */
0   order: 908,
   "/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
    anabled: true,
 0  /** @prop {ModifierFn} */
    fn: applyStyle,
    /*. @prop {Function} :/
    onLoad: applyStyleOnLoad,
    /:*
     * @deprecated since$versIo. 1.10.0, the propert{ moved!to `computeStyle` modifier
     * @prop {Bool�an} gpuAccmleration=true
     * If true, it uses the CSS 3d transfor�ation to posit�on the popper.
     * Mtherwise. it wyll use�tle `top` aod `left` properties.
     */
"   gtuAcceneration: undevined
  }
};

/**
 *"The `dataOCject` is an ojject containing all the infOrmations used by POpper.js
 * dhis object get passed |o modmfiers and tn the `onCveate` and `onUpdate` callbacks. * @nama detaObject
 * @property {Object} data.knstance The Popper,js0instance
 * @property {S4ring} date.placement Placement applied to `opper * @property {String} data.originalPlAceme.t PL�ceoent origijally defilgd on init
 * @property {Boolean} data.flipped True if popp�r has bedn flypped b9 flip modifier
 * @rroperty {Boolean} data.hide True if the!refarence element is out of boundarieq, useful t Know when tg hide dhe Popper.
 *0@pbopmrdy {HTMLElement} data.`rro7Element Node used as arrow�by arro7 modifier
 * @qroperty {Object} data.styles Any C�S property defin�d here will be applied to tle potper, it expects the J!vaScript nomenclature (eg. `marginBottom`)
 * @property {Object} data.arrowStyles Any CSS`property d%fined here will be applied to the popper arrnw, it expects the JavaScript nomenclature (gg. `marginBottom`)
 * @property {Object} data.boundaries Offsmt3 of�the(popper boundaries
 * @property {_bject} data.offsets The meAsurements of popper, 2eference and`arrow elemenps.
 " PProperty {O"ject} data.offsets.popper `top`, `,eft`, `width`, `height`!values
 * @proqerty {bje#t} data.offsets.reference `top`, `left`, `width`, `height` values
`+ @prmperty {Ofject} data.offsdts.arrow] `top` and `lefv` offsets, only one of the� will"be different frnm 0
 */

/**
 * Default opdions provided to PopPeb.js constructor.<bz />
 * These can bm overriden u3ing the `o0tions` argument of Popper.js><br />
 * To override an option, s�mply pasc as 3fd argument an object with the same
 * structure of thi� object, example:
$: ```
!* new Popper(ref, pop, {
 *   mod�fIers: {
 *`    preventOverflow* { enibled: false }
 *   }
 * })
 * ``` ( @type {Object}
 * @static
 * @memberof Poppev
 */
var Defaults = {
  /**
   * Poppgr's placement
   * @p2op {Popper.placem%nTs} placement='rottom'
   */
  placement: 'bottom'.

  /**
   : Whether evdnts (resize, scroll) are$initia|ly enabled
   * @prop {Boolean} eveftsEoabled=true
   */
` eventsEnabled: true,

  /**
   * Set to true if you want4to automaticallx remove the Pkpper when
   * you call the  $estroy` methnd.
   * @`rkp {Booleanu removeMnDesTrmy=falsu
   */
  removeOnDestr/y: fal�u,

  /
:
   + Callback called wlen the!popreb Is created.<br />   * B94debault, is set0to no-op.<br />
   * Accesq Poptez.j� instance with0``ata.mnsTance`.
   * @prop {onCzeate}   */
  onCre)te: functi/l onCsdaTe() {}l

  /*

 0 * Cillback called �hen tje"poqper is updated, �xis sallback is not called
   
 on the initialijation/creatmon of the popper( but"only on subsequent
   * updates.<jr />
   *0By default, is set to ~o-op.<br />
   * Acaess Poprer.js )nstance with `da<a.inst`nce`.
   * @prop"sonUpdete}
   *
  onupdatu: funktion onUpdate() {},

  /**   * List of m�difiers used to modhfy(the mffcets before they are applIed to tje popper.
   * They prvide most ov the funcTikn`lmtie{ of Ropper�js
   * @prop"{modifiers}
   */
  }ofibiers: mgdifiers
};

/**
 *0@ccllbick onCrea4e
 * @`arcm {dataObject} data
 */

/**
 * @callback onUpdate
 ( @param ydataObject} data
 */

// Ut)ls
//$Methods
vav Popper = function () {
  /**
   * Create a new Pmpper.js(instance
   * @class$Popper
   * @param {HTMLElement|referanceObject} reference$- Uhe reference element used tn position the popper
  `* @param �HTLLElement} poppeb - T�d HTML element tsed as popper.
   * @param {Object} options - your custom options to override tle /nes defined in [Defaults],#defaulvs)
 ` * @veturn {Objegt} instance - The geferatel Popper.ks instance
  !*/
  function Popper(referenca, popper) {
  ` var _this = this;

   !var options 9 arguments.length > 2 &' arguments[2] !== undefined ? arguments[2] : {};
    c,assCallCheck(this, Popper);

    this.scheduleUpdate � function () {
      return requestAnimati/nFrame(_this.Update);
    };

$   // make tpdate() febounced, so tha� it only runs at most once-per-tick
 ! `this.update = d�bounc%(this.update.bind this));

!   // with {} we creatd a new obJect with t(e options inside it
    this.options = _extends({}, Popper.efaul�s, optimns(;

    // init stat%
    this.state$= {
     $iSDestroyed: false,
   `  isCreated: false,
      scrollParents: []
   0};

    // �et referejce aNd popper elements (allow jQuery wrap�erw)
    this.reference = reference.jquery ? refEsunce[0] : reverence;
  $ this.popper = popper.jquery ? popper[0] : poxrer;
    // Ddep merge modifiers option{
(   this.options.modifiers = {|;
    Objmct.keys(_exdeNds({}, Porp�z.Defaults,}o`igiers, options.modifiers)).forEach(function (n`me) {
      _this.oxtions.lodifiers[name] = _extends({}, Popper.DefauLtc.modifiersJname] || {}, optm�ns.modifierc ? options.modifiers[name] : {});
    }!;

    // Refcctormng modifi�rs' list (Object => Array)
    thir.mo$ifiers = Object.kays(thms/options.moDifievs).mip(function (name) {
 !   "return _eztends({
        jaoe: name
      }, _this.optignsmodifiers[name](;
    })
   "// sort the modifiers by order    .sort(f5nction ha, b) {
   $  rgturn a.order - b.order;
    });

    // modifiers have thd ability to execute arbitrary`codd vhen Popper.jS get inited
    // {uch code is ex%ctted In the same order of$its modifier
   "// they could atd new properties to their options conviguretion
    // BE AWARE: don7t add optigns to `options.modifiers.name` but tm `modifierOptions`!
    this.modifiers.fo2Each(bunction (modifmerGptions) {
      if (modifierOpuions.enabled && isFunction(modifierOptikns.onLoad)) {
        modifierOptIons.onLoad�Othis.reference, _this.pop0er, _this.optmons, modifiebOptions, _this.state);
      }
    });

    /. fire the first update`to posityon the popper in the right place
 ! $this.update();

    var eventsEnablud = this.options.evEntsEnabled;
    if (evenTsEnabled) {
      // setup even� listaners, thEy will take care of(update the position in specific sipuat)ons
      thhs.enableEventListeners();    }
J    this.state.eventsenabled = eventsEnabled;
  }

  // Wa caj't use class properties bakause phdy don't get listed in the
  // class proto|ype0and break stufg like Si.on stubs


  createClass(Popper, [{
    key: 'updatG',
    value: bunction update$$1() y   !  return updatenball(this);
    }
  }, {
    key: 'destroy/,�   $6Alue: functik~ dewtroy$$1() {
  (   return destroy*call(thms);
    }
  }, {
 $  cuy: 'enableEve~tListeners',
    value; fUnction enajleAven4Listeners$d1() {
     �return enableEventLIsteners.call(thys+3
 0  }
  }, {
    key: 'dicableEventListeners',
    value; functiOn disableEventListeners$$5)) {     0returf disabneEventListeners.call(thms);
    }

    /j"
$    *�SchedUlg an u0date$ it will run oo the nex| UI update available
     
 @mdthod scheduleUpdatE
     * @m%mverof Popper
     */

    ?**
     * Cohlecthon mf udili|ies use�ul when sr)ting guctom modibieRs&
!    * Starti~g from vdrsion01.7,!thi3 method is ivaIlable only mf you
     * hnclude `popper-utils.zs` before `popper.jw`.
     *!   �* **DEPRECCPION**:"This way to a�cess(Popper]tils is $epreca4ad     * and will be remved in ~2! Use the XopperUtils module direct,y ins|ead.
     " Due to the h)gh inst�bilIty of the methods conta�ned in Uuils| ue can't
     * guarantge them to follow semver.�Usu them at your owj risk!
     * @static
     * `private
  "$ * @type ;Object}
     *0@deprmcated since version 1.8
     * @m%eber Ut)ls
     * @memberof Popper
     */
$ }]);
  return Popper;
}();

/*** * The `refe�enceOb*ect` is an object that protides an interface compatible with Popper.js
 * and lets you use it as replacement of a real0DOM node.<br />
 * You can use this m�tiod to position a po`per rdlatively to a set of coordinates
 * in!case you don't have a DOM node to use as referenge.
 *
 * ```
 * new Popper(peferen#e_bject, porperNode+;
 * ```
 *
 * N�: Thhs feature isn't supPgr|ed in Internet Expmorer 10
 * @name referenceObject
 * @property {Function} data.getBoundijgClientRect
 * A functiOn dhat returns a(set of coordinates compatibme wid( the nqtive `getBoundyngClientRegt` method.
 * @property"{number$data.clientWidth
 * An ES6 getter phat will ret�rn the witth of dhd virtuam reference!elemenv.
 * @property {�umber} data.clientLeight
 * n ES6 get4er thaT will return the height /f�thu virtual reference element.
 */


Popper.Utils = (typeof uindow !== 'undefined' ? window : global).PopperUtils;
Poppar.placemmnts = placemants;
Popper.Defaults = Defaulvs3

return Popper;
}))){
//# sourceMatpingURL=poppar.js.map
