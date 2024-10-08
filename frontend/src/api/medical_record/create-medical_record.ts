/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IMedicalRecord } from "../../interfaces/interfaces";

type IBody = Omit<IMedicalRecord, 'id'>;

export const createMedicalRecord = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/medical_records`,
    body: JSON.stringify(formData),
  });
  return result;
};

