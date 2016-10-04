/*Products*/
CREATE OR REPLACE VIEW vw_products_dashboard AS
    SELECT 
        a.atc_code_name AS atc_code,
        r.routes_name AS route,
        c.country AS country,
        m.mah_company_name	AS manufacturer,
        pi.importer_name AS importer,
        d.dosage_form,
        MONTHNAME(i.import_date) AS data_month,
        YEAR(i.import_date) AS data_year,
        SUM(id.quantity) AS quantity,
        SUM(id.total_fob_price) AS usd_value
    FROM ppb_products.products p
    LEFT JOIN ppb_products.param_atc_code a ON p.atc_code = a.atc_code_name
    LEFT JOIN ppb_products.param_routes_of_admin r ON p.route_admin = r.routes_id
    LEFT JOIN ppb_products.country c ON p.country_of_origin = c.id 
    LEFT JOIN ppb_products.mah_2 m  ON m.product_id = p.product_id
    LEFT JOIN ppb_general.import_details id ON id.product = p.product_id
    LEFT JOIN ppb_general.import i ON i.id = id.import_id
    LEFT JOIN ppb_products.importer pi ON pi.id = i.importer_name
    LEFT JOIN ppb_products.dosage_form d ON d.id = p.product_dosage_form
    GROUP by atc_code,route,country,manufacturer,importer,dosage_form,data_month,data_year;

/*Premises*/
CREATE OR REPLACE VIEW vw_premises_dashboard  AS
    SELECT 
    	UCASE(c.CadreDesc) AS cadre,
    	UCASE(m.town) AS county,
    	c.renewal_year AS data_year,
    	COUNT(*) as quantity
    FROM ppb_general.contacts_directory c
    LEFT JOIN ppb_general.manufacturer m ON m.ltr_id = c.premise_name
    GROUP BY cadre,county,data_year