/***************************************************************************
                             widget.cpp  -  GDL WIDGET_XXX library functions
                                            the actual library routines
                                            (widget system in gdlwidget.cpp)
                             -------------------
    begin                : July 22 2002
    copyright            : (C) 2002 by Marc Schellens
    email                : m_schellens@users.sf.net
***************************************************************************/

/***************************************************************************
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU General Public License as published by  *
 *   the Free Software Foundation; either version 2 of the License, or     *
 *   (at your option) any later version.                                   *
 *                                                                         *
 ***************************************************************************/

#include "includefirst.hpp"

#include <iostream>

#include "datatypes.hpp"
#include "envt.hpp"

#ifdef HAVE_LIBWXWIDGETS

#include "gdlwidget.hpp"

namespace lib {
  using namespace std;

  BaseGDL* widget_base( EnvT* e)
  {
    SizeT nParam = e->NParam();
    // ...
  }

} // namespace

#endif
