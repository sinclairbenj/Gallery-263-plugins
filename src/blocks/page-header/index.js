import { registerBlockType } from '@wordpress/blocks';
import { 
  useBlockProps, RichText, InspectorControls
} from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components'
import { __ } from '@wordpress/i18n'
import icons from '../../icons.js'
import './main.css'

registerBlockType('g263-plus/page-header', {
  icon: icons.primary,
	edit({ attributes, setAttributes }) {
    const { content, showCategory } = attributes
    const blockProps = useBlockProps();

    return (
     <>
      <InspectorControls>
        <PanelBody title={__('General', 'g263-plus')}>
          <ToggleControl
            label={__('Show Category', 'g263-plus')}
            checked={showCategory}
            onChange={showCategory => setAttributes({ showCategory })}
            help={
              showCategory ?
              __('Category shown', 'g263-plus') :
              __('Enter a custom label', 'g263-plus')
            }
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <div className="inner-page-header">
          {
            showCategory? 
            <h1>{__('Category: Undefined', 'g263-plus')}</h1> : 
            <RichText
              tagName='h1'
              placeholder={__("Heading", "g263-plus")}
              value={content}
              onChange={content => setAttributes({ content })}
            />
          }
          </div>
      </div>
      </>
    );
  }
});