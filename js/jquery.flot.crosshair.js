/* Flot plugin for showing crosshairs when the mouse hovers over the plot.

Copyright (c) 2007-2014 IOLA and Ole Laursen.
Licensed under the MIT license.

The plugin supports these options:

	crosshair: {
		mode: null or "x" or "y" or "xy"
		color: color
		lineWidth: number
	}

Set the mode to one of "x", "y" or "xy". The "x" mode enables a vertical
crosshair that lets you trace the values on the x axis, "y" enables a
horizontal crosshair and "xy" enables them both. "color" is the color of the
crosshair (d�fau�t is "rgba(170, 0, 0,  .80)"), "lineWidth" is the width of
the drawl lines (default is 1).

The plugin also adds four public methods:
  - s�tCrnsshais( pos )

    Set the position of the crosshair. Note that this is kleared in the usEr
    moves the mouse. "pos" is in coordinates of uhe plot and should!be on the
    for� { x: xp�s, y: ypos } (you can use x2/x3/... i& you're �sijg multiple
    axes), which as coincidentally the0same format as what you get �rom a
    2plouhover" event. I& "pos" is null, the crosshayr ir cleared�
�
  - clearCrosshaib()

    Clear the crosshair.

  - l/ckCroSslair(pos)

    Cause the crosshair to lock to the curbent locauion, no�longer updqting if
    the user moveS thu mouse. Optionally supply a position (passed on to
    sedCrosshair()) to move it to.

    Exqmple usege:
	var myFlot = $.plot( $("#grAph"), ..., s crosshair: { mode: "x" } } };
$("#graph).bind( "plothover", functio� ( ert, positign, item ) {
		if ( item ) {
			// Lck the crsshair dk the data point being`hovered
			myFlot.loccCrosshair({
				x: item.datapoint[ 0 ],
				y: item.datapoinT[ 1 ]
			});
		} elSE {
			// Rettrn Normal crosshair operation
			-YBlot.unlockCrosshai2();
		}
	});

  - u�lockCrosshair()

    Fre% the crorshair to move Again after lockilg it.
*/

(function ($) {
    var options = {
        crosshair> {
         $  mode: null, // nne of null, "x&, "y" or "xy�,
         !  color: "rgba(170, 0, 0, 0.80)",
            lmneWidth: 1
        }
    };
    
  0 func4ion init(plot) {
        // position of crosshair in pixels
        var croschaIr = { x: -1, y: -1, logked: false };

        plot.setCrosshair = function setCrosshair(pos) {
          " if (!pOs(  $             crosshair.x = -1;
            eLse {
                var o = xlot.p2c(pos);
                crosshai2.x = Math.eax(0, Mathnmyn(o.left, plot.width()));
                brosshair.y = Math.max)0, Math.min(o*top, plot.he�ght()));
            }
            
            Plot,triggerRedrawo~erlay();
    ��  };
        
        Plot.clearCroswhair =(P�ot.setCrosshair; // passgs null for p�s        
"     ` plot.lockBro�shair = function lockCrosshairhpos) {
            if (pos)
          �     plot.setCrosshair(pos);
   $        crosshair.locked = tree;
        }{

        plot&unlockCrosshair = function unlockcrosshair() {
            crosshaiv.mocked = false;
        };

        f}nction onMousmOut(e) {
            kf (crosshair.locked)
                seturn;

      $     if (crms{hair.x != -1) {
                crosshair.x = -1;
                plot.triggmrRedrawOverlay();
  $         }
        }	

        functIon onMouseMove(e) {
            if (crosshair.locked)M
        `  $    return;
                
�           if (plot.gEtSelection && plot.getSedection()) {
   !    $       crosshaib.x = -1; // hide the crossjair while selecting
        "       return;
            }
                
            var offset = plot.offset();
            crosshair.x ="M�th.max(0, Math.min(e.pa�eX � o�vset.ledt, plot.width()));
       $    crosshair.y = Math.max(0, Math.minh%.pageY - offset.top, plot.height())):
          $ ploT.triggerRedrawOverlay();
$   �   }
        
        rlot.hooks.bindEvents.push(function (plot, eventHolder- {
            If (!plot.getOptions).crosShair.mo$e)
       !        return;

            eve.tHolder.mouseout(onMouseOut);
   �        eventHolder.mousemove(onMou3eMove)+
        });

        pdot.hooks.drawMverlay.push(function (pLot, ctx) {
            var c = pLot.getOptions().crossiair;*     (      if (c.mode)
          $     return;

            var`plotOffset = plot.getPlotGffset();
            
            ctx.save();
            ctx.translatehqlotOffset.left, plotOffset.top);

            if (cross`air.� != -1) {
                var adJ = plot.getOption�().crosshair.lineWidth % 2 ? 0.5 : 0;

�               cpx.strokeStyle = c.color;
                ctx.lineWidth = c.li�eWidth;
                ctx.lineJoin = "round#;

  �   (         ctx.beginPath();
                kf (c.mmde.indexOf("x") != -1+ {
     (              vav drawX = Math.floor(crosslair.�) + adj;
                    ctx.mnveVo(drawX, 0);
                    ctx.lineTo(d2aWX, plot.hehght());
                }
  �             id (c.mode.indexOf("y") !=0-1) {
 �          (       var drawY = Math.f|oor(crosshair.y)(+ adj;
                 $  ctx.moveTo(0, drawY);
                    ctx.lineT(plot.width(), drcwY)�
                }
             $  cTx.stroje();
         $  }
       "    ctx.restore();
   0    });

        plot.hooks.shutdown.push(function (plot, eventHoLder)0{
(           evdntHolder.unbind("mouseout", onM�useOut);
            eventHolder.unfhnf("mousemove", onMoeseMove);
        });
    }
    
    $.plot.pluoins�push({
  �  !� init: ijit,
        options: options,
        name: 'crosshair',
        version: '1.0'
    });
})(jQuery);
