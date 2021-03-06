<?php require('_header.inc.php'); ?>
			
<h2>Requirements</h2>

<p>Obligatory libraries:</p>
<ul>
    <li><a href="http://plplot.sourceforge.net/">plplot</a></li>      
    <li><a href="http://www.gnu.org/software/gsl">gsl</a></li>         
    <li><a href="http://tiswww.case.edu/php/chet/readline/rltop.html">readline</a></li>
</ul>    

<p>Optional libraries:</p>
<ul>
    <li>Xlib (part of any X11 distribution; needed for ploting on screens !)</li>
    <li><a href="http://www.imagemagick.org/Magick++/">Magick++</a> (ImageMagick's C++ API; PNG and JPEG support)</li>   
    <li><a href="http://www.fftw.org/">FFTW</a> (both float and double versions needed; faster than FFT code provide by the GSL for 2^N 3^M 5^O cases)</li>
    <li><a href="http://www.unidata.ucar.edu/software/netcdf/">netCDF</a> (v3 or v4)</li>   
    <li><a href="http://www.hdfgroup.org/products/hdf4/">HDF4</a></li>
    <li><a href="http://www.hdfgroup.org/HDF5/">HDF5</a></li>
    <li><a href="http://www.ecmwf.int/products/data/software/grib_api.html">GRIB API</a></li>
    <li><a href="http://www.unidata.ucar.edu/software/udunits/">UDUNITS-2</a></li>
    <li><a href="http://www.wxwidgets.org/">wxWidgets</a></li>
    <li><a href="http://home.comcast.net/~gevenden56/proj/">libproject</a> (mapping on Earth)</li>
    <li><a href="ftp://ftp.soest.hawaii.edu/pwessel/gshhs/">GSHHS</a> (see GDL's <a href="http://gnudatalanguage.cvs.sourceforge.net/viewvc/gnudatalanguage/gdl/MAP_INSTALL">MAP_INSTALL</a> file)</li>
    <li><a href="http://pslib.sourceforge.net/">pslib</a> (fine-tuning PostScript output)</li>
</ul>

<p>The Python interface (see <a href="http://gnudatalanguage.cvs.sourceforge.net/viewvc/gnudatalanguage/gdl/PYTHON.txt">PYTHON.txt</a>) requires:</p>
<ul>
    <li><a href="http://www.python.org/">Python</a></li>   
    <li><a href="http://numpy.scipy.org/">Numpy</a></li>
</ul>

<p>Useful IDL/GDL-written libraries:</p>
<ul>
    <li><a href="http://cow.physics.wisc.edu/~craigm/idl/cmsave.html">CMSVLIB</a> (for SAVE and RESTORE)</li>
    <li><a href="http://cow.physics.wisc.edu/~craigm/idl/fitting.html">MPFIT</a> (fitting)</li>
    <li><a href="http://idlastro.gsfc.nasa.gov/">Astron Lib</a> (FITS format I/O, astronomy-related procedures)</li>
    <li><a href="http://physics.mnstate.edu/craig/textoidl/">TeXtoIDL</a> (Greek letters, special symbols, sub/superscripts via TeX commands)</li>
</ul>

<p>At least g++ 3.2 (or a similar C++ standard conforming
compiler) is needed for compiling GDL. 
<!--Note that problems were reported with following versions of g++:
</p>
<ul>
  <li>g++ 3.3.1 (problems with static casts)</li>
  <li>g++ 3.3.5 (buggy nested templates)</li>
  <li>g++ 3.3 build 1671 shipped with OS X</li>
</ul>
<p>
-->
Succesfull compilations were reported with Intel C++ compiler and numerous versions
of GCC including the 3.x and 4.x families, on various UNIX environments including
Linux, Mac OS X, FreeBSD, OpenSolaris, Cygwin and OpenBSD. 
GCC &gt;= 4.2 is needed for OpenMP.
</p>

<p>The <a href="http://ftp.gnu.org/pub/gnu/readline/readline-5.0.tar.gz">GNU readline</a>
library 4.3 or later is needed (GDL should compile
without it, but it's very inconvenient to use that way, furthermore,
proper event handling for graphic windows requires readline).<br/>
OS X 10.4: Note that the the readline library which comes with OS X is <b>
not</b> GNU readline. You need to install GNU readline and set the --with-readlinedir=DIR option to configure.
</p>

<p>
  GDL supports compilation using both the shipped autotools "configure" script as well as using CMake.
  Consult the <a href="http://gnudatalanguage.cvs.sourceforge.net/viewvc/gnudatalanguage/gdl/README">README</a> 
  and the <a href="http://gnudatalanguage.cvs.sourceforge.net/viewvc/gnudatalanguage/gdl/INSTALL">INSTALL</a> 
  files in the GDL distribution for further details on GDL requirements and configuration.
</p>

<p>GDL was developed using <a href="http://www.antlr2.org">ANTLR v2</a> 
but unless you want to change the grammar (*.g files) you don't need
ANTLR. All relevant ANTLR files are included in the package.<br/>
</p>

<!--
<p>GDL is currently developed using <a href="http://www.kdevelop.org">KDevelop</a> 
3.5.1 under the GNU/Linux distribution Kubuntu. The KDevelop project file is included in the tarball, so if you
have KDevelop you should be able to use it with GDL seamlessly.</p>
-->

 
<?php require('_footer.inc.php'); ?>
