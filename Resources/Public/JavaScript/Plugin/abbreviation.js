/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */

import { Plugin } from '@ckeditor/ckeditor5-core';
import AbbreviationEditing from '@creativekallol/ckeditor-abbr/abbreviationediting.js';
import AbbreviationUI from '@creativekallol/ckeditor-abbr/abbreviationui.js';

export default class Abbreviation extends Plugin {
	static get requires() {
		return [ AbbreviationEditing, AbbreviationUI ];
	}
}
