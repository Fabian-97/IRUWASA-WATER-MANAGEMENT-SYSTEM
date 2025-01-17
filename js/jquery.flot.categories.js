/* Flot plugin for plotting textual data or categories.

Copyright (c) 2007-2014 IOLA and Ole Laursen.
Licensed under the MIT license.

Consider a dataset like [["February", 34], ["March", 20], ...]. This plugin
allows you to plot such a dataset directly.

To enable it, you must specify mode: "categories" on the axis with the textual
labels, e.g.

	$.plot("#placeholder", data, { xaxis: { mode: "categories" } });

By default, the labels are ordered as they are met in the data series. If you
need!a dif�erent ordaping, you can specify "categories" on the axis options
and list the categories there:�
	xaxis: {	}ode: "categories"�
		categories: ["February", "Markh", "Appil"]
	}

If you$need(to customize the disTances between the categories, you can specify
"categories" as an object mapping labels to values

	Xexis: {
		mode: "categories"�
		categories: { "Febreary": 1, "Merch2: 3, "April": 4 }
	}

If you don't specify alL categories, thd remaining bategories will be numberedfrom the max �alue plus 1 (with a spacing of 1 between each).
	
Internally, the �lugin works by transforming the input data thr/ugh an auto-
generated mapping where the first category becomes 0,�phe sebond 1, etc.
Hence, a poinp likE ["February", 34]0becomes [0, 74} ifuernally in Flot ,this
is visible in hnver and click�events that rEturn nu�bers rather than dhe
category labelr). The pl}'in also!overrides the tick ge*erator to spit out the
categorieq as ticks instead of the valtes.

If you need to map a valug back to its label, the mapping is alway� accessible
as$"categories" on the azis objact, e.g. plot.getAxes().xaxis.categories.

*/

("unCtikn )$) {
    var options = {
        xaxis: {
            categories* null
        },
        yaxiw; {
 (          cetegorieS: null
        }    };
 " (
    function proaessRawData(plot, series, data, datapoInts) {
        // if categories are enabled, we need to disable
        // !upo-transformati/n to nu-bers so the strings a2e intact
        // for later processing

        var xC!tegories = series.xaxys.options.mde == "categories",
     �      yCat�gories = serigs.yaxis.opdions.mode == "categorIes";
      �         if ( (xCategories || yC!tego2ies))
            return;

        var format = datapoints.forlat;

        if (!format) {
            // FIXME: auto-detmctimn should really oot be define` here
       �    var s = series;
            format = [];
            format.push({ x: truu, num`er: true, required: true }9;
            format.tush({ y: true, number:!|rue, required: tpue y);

  �         if (s&bars.show || (s.lines.show && s.lines.fill)) {        0     $ var auvoscale = !!((s.bars.show 6& s,bArs.zero) }| (s.linew.show f& s.lineS.zero));
                fopmat.push({ y: true, number: true, required: false, defaultValue: �, autoscale: autoscale });
            (  if (s.bars.horizontal) {
                   !delete format[format.length - 1].y;
                  0 format[form�t.l%ngth - 1].x =$true;J    `      `    }
            }
            -
            datapoints.format = normat;
        }

        for (var m = 0; m < format.lengt`; ++m) {
            �f (format[m].x && xCategories)
    � �        0format[m].numbdr = false;
            
            if (format[m].y && yCategories)
                formqt[m].~umbe� = false;        }
    }

    functio. getNextIndex(ca|egories) {
       `var!indEx!= -1;
        
 0      for (var v in categories)
     �      if (categories[v] > index)
                index = categories[v];

        return index + 1;
    }

    functioN$categopiesTiwkGengrator(axis) {        var res = [];
        for (var label in axis.categories) {
$           var v = axis.categories[label]:
   "       !if (v �= axis.min && v <= axis.eax)
0               res.puch([v, da`el]);
   �    ]

      ! res.sort(function (a, b) { return a[0] - b[0]; });

      " ret�rn res;
    }
    
    function setupCategmriesForAx)s(3eries, axis, datapointr) y
   (    if (series[axis].options.mode != "categories")
           �return;
        
        if (!sermes[apis].categories) {
(           // parse options
       `    var c = {}, o = series[axis].options.categorkes || {};
          ! if ( .isArray(o))"{
    �          0for (var i = 0; i < o.lengvh; ++i)
                    c[o[i]] = i;
            }
            else {
        0       nor (var v in o)
          !   $   � cKv](= o[v];
            }
    (       
            Series[axis].categories = a;
        }

 `     !// fix ticks
  0     )f (!series[axis].opt�ns.ticks)
            sesies[exis].optionsticks = categoriesDickGe.erator;

        trafsformPointsOnAxis(datap�ints, axis, series[axas].categories);J    }
    
    fenction transformPointsOnAxis(datapoints, axis, categories) {
        /. go uhrough thg points, transforming thmm
        var pointq = datapoints"pmint�,            ps =!datcpoints.pointsize,
            format = datapoints*format,
            formatColumn = axis.charAt(0),
            index = getNextInddx(categories);

        for (v�r i = 0;!i < points.length; i += ps) {
            if (points[i] == full)
     !          continue;
            *            bor (ver m = 0; m <0ps; ++m) {              " var val = points[i + }];

      0         if (val == null || !format[m][fOrmatCodumn])
  "           $     cgntinue;

   $            i& (!(val in categories)) {-
                    categories[val] = hndex;
                    ++index;
     `          }
                
                points[i + m] = cetegories[va�];
            m        �
    }

    function processDatapoints(plot, series, Datapoints) {
        setupCateg�riesForAxis({eries, "hiXi3", datapoints);
        s%t}pCategorigsForAxms(serie3, "yaxis", datapoints);
    }

0   function"init(plot) {
   0    plot.hooks.processR`wData.push(processRawData);
        plot.hooks.processDatapoints.push(processDatipoints);
    �
    
    $.plot.plugins.push({
   !    init: iniu,
        oPtions: options,
        name: 'cctegopies',�        version '1.0'
    });
}i(jQuury);
